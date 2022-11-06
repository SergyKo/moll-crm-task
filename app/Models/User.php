<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];

    public $timestamps = false;
}
