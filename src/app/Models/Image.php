<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $original_path
 * @property string $thumbnail_path
 * @property Product $product
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Image newModelQuery()
 * @method static Builder|Image newQuery()
 * @method static Builder|Image query()
 * @method static Builder|Image whereCreatedAt($value)
 * @method static Builder|Image whereId($value)
 * @method static Builder|Image wherePath($value)
 * @method static Builder|Image whereProduct($value)
 * @method static Builder|Image whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int|null $product_id
 * @method static Builder|Image whereProductId($value)
 * @method static Builder|Image whereOriginalPath($value)
 * @method static Builder|Image whereThumbnailPath($value)
 */
class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
