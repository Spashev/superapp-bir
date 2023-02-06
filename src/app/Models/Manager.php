<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\Manager
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $iin
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string $type
 * @property int $is_superuser
 * @property int $is_active
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @property-read Collection|Role[] $roles
 * @property-read int|null $roles_count
 * @method static Builder|Manager newModelQuery()
 * @method static Builder|Manager newQuery()
 * @method static Builder|Manager permission($permissions)
 * @method static Builder|Manager query()
 * @method static Builder|Manager role($roles, $guard = null)
 * @method static Builder|Manager whereCreatedAt($value)
 * @method static Builder|Manager whereEmail($value)
 * @method static Builder|Manager whereEmailVerifiedAt($value)
 * @method static Builder|Manager whereFullName($value)
 * @method static Builder|Manager whereId($value)
 * @method static Builder|Manager whereIin($value)
 * @method static Builder|Manager whereIsActive($value)
 * @method static Builder|Manager whereIsSuperuser($value)
 * @method static Builder|Manager wherePassword($value)
 * @method static Builder|Manager wherePhone($value)
 * @method static Builder|Manager whereRememberToken($value)
 * @method static Builder|Manager whereType($value)
 * @method static Builder|Manager whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection|\App\Models\SystemNotification[] $systemNotifications
 * @property-read int|null $system_notifications_count
 * @method static Builder|Manager admin()
 */
class Manager extends Authenticatable
{
    use HasApiTokens, HasRoles, HasFactory, Notifiable;

    protected $guard_name = 'manager';

    protected $fillable = [
        'full_name', 'phone', 'email', 'iin', 'is_active', 'password', 'is_superuser'
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password): void
    {
        if( Hash::needsRehash($password) ) {
            $password = Hash::make(trim($password));
        }
        $this->attributes['password'] = $password;
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function systemNotifications(): HasMany
    {
        return $this->hasMany(SystemNotification::class);
    }

    public function unreadMessages()
    {
        return $this->systemNotifications()->where('is_read', 0);
    }

    public function scopeAdmin($query)
    {
        return $query->where('is_superuser', 1);
    }
}
