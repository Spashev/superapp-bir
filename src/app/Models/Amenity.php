<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Amenity
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static Builder|Amenity newModelQuery()
 * @method static Builder|Amenity newQuery()
 * @method static Builder|Amenity query()
 * @method static Builder|Amenity whereCreatedAt($value)
 * @method static Builder|Amenity whereIcon($value)
 * @method static Builder|Amenity whereId($value)
 * @method static Builder|Amenity whereIsActive($value)
 * @method static Builder|Amenity whereName($value)
 * @method static Builder|Amenity whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Amenity extends Model
{
    use HasFactory;

    protected $guarded;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function setIconAttribute($icon): void
    {
        $this->attributes['icon'] = htmlentities($icon);
    }
}
