<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        return view('orders/show', [
            'order' => Order::findOrFail($id)
        ]);
    }

    /**
     * @return View
     */
    public function index()
    {
        return view('orders/index', [
            'orders' => Order::all()
        ]);
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('orders/create');
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id)
    {
        return view('orders/edit', ['order' => Order::findOrFail($id)]);
    }

    /**
     * @param Order $order
     * @return RedirectResponse
     */
    public function destroy(Order $order)
    {
        $orderId = $order->id;
        $order->delete();
        return redirect()->route('orders.index')->with("success", "Заказ " . $orderId . " успешно удален!");
    }


    /**
     * @param Request $request
     * @param Order $order
     * @return RedirectResponse
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            "type" => ['required', Rule::in(Order::$types)],
            "status" => ['required', Rule::in(Order::$statuses)],
        ]);

        $order->fill($request->post())->save();

        return redirect()->route('orders.index')->with("success", "Заказ " . $order->id . " успешно изменен!");
    }
}
