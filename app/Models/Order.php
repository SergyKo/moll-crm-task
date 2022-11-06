<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $costumer
 * @property string $phone
 * @property Carbon $created_at
 * @property Carbon $completed_at
 * @property string $type
 * @property string $status
 *
 * @property User $user
 * @property OrderItem[] $orderItems
 */
class Order extends Model
{
    /**
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'completed_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
