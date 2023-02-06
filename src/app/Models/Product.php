<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property Manager|null $owner
 * @property float $rating
 * @property string $address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @property-read Collection|Image[] $images
 * @property-read int|null $images_count
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static Builder|Product newModelQuery()
 * @method static Builder|Product newQuery()
 * @method static Builder|Product query()
 * @method static Builder|Product whereAddress($value)
 * @method static Builder|Product whereCreatedAt($value)
 * @method static Builder|Product whereId($value)
 * @method static Builder|Product whereName($value)
 * @method static Builder|Product whereOwner($value)
 * @method static Builder|Product wherePrice($value)
 * @method static Builder|Product whereRating($value)
 * @method static Builder|Product whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $price_per_night
 * @property string|null $price_per_week
 * @property string|null $price_per_month
 * @property int $rooms_qty
 * @property int $swimming_pool
 * @property int $trestle_bed
 * @property int $sauna
 * @property int $is_active
 * @property int $status
 * @property-read Collection|Amenity[] $amenities
 * @property-read int|null $amenities_count
 * @method static Builder|Product whereIsActive($value)
 * @method static Builder|Product wherePricePerMonth($value)
 * @method static Builder|Product wherePricePerNight($value)
 * @method static Builder|Product wherePricePerWeek($value)
 * @method static Builder|Product whereRoomsQty($value)
 * @method static Builder|Product whereSauna($value)
 * @method static Builder|Product whereStatus($value)
 * @method static Builder|Product whereSwimmingPool($value)
 * @method static Builder|Product whereTrestleBed($value)
 * @property int $manager_id
 * @property string $slug
 * @property-read \App\Models\Manager $manager
 * @method static Builder|Product whereManagerId($value)
 * @method static Builder|Product whereSlug($value)
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setNameAttribute($name): void
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name, '-');
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }
}
