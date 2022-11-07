<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $customer
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
    const UPDATED_AT = null;

    public const TYPE_ONLINE = "online";
    public const TYPE_OFFLINE = "offline";
    public static array $types = [
        self::TYPE_ONLINE,
        self::TYPE_OFFLINE
    ];

    public const STATUS_ACTIVE = "active";
    public const STATUS_COMPLETED = "completed";
    public const STATUS_CANCELED = "canceled";

    public static array $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_COMPLETED,
        self::STATUS_CANCELED
    ];

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
