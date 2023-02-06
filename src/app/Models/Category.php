<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $slug
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Product[] $products
 * @property-read int|null $products_count
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereDescription($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereIsActive($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereSlug($value)
 * @method static Builder|Category whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    public function setNameAttribute($name): void
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name, '-');
    }

    public function isParent()
    {
        return $this->parent === null;
    }
}
