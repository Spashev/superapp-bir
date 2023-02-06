<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\SystemNotification
 *
 * @property int $id
 * @property string $body
 * @property string $full_name
 * @property int $sender_id
 * @property int $manager_id
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Manager $manager
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification unread()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemNotification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemNotification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeUnread($query)
    {
        return $query->where('is_read', 0);
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }
}
