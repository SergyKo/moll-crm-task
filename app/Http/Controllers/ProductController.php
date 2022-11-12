<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        return view('products/show', [
            'products' => Product::findOrFail($id)
        ]);
    }

    /**
     * @return View
     */
    public function index()
    {
        return view('products/index', [
            'products' => Product::all()
        ]);
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id)
    {
        return view('products/edit', ['products' => Product::findOrFail($id)]);
    }

    /**
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $productId = $product->id;
        $product->delete();
        return redirect()->route('products.index')->with("success", "Товар " . $productId . " успешно удален!");
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {

        Log::info(' update id : ', [$id]);
        $request->validate([
            "name" => ['required', "max:255"],
        ]);

        $name = $request->input('name');
        Log::info('name: ', [$name]);

        $product = Product::findOrFail($id);
        $product->fill($request->post())->save();

        return redirect()->route('product-index')->with("success", "Товар " . $product->id . " успешно изменен!");
    }
}
