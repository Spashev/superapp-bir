<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\AttributeValue
 *
 * @property int $id
 * @property string|null $title
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Attribute|null $attribute
 * @method static Builder|AttributeValue newModelQuery()
 * @method static Builder|AttributeValue newQuery()
 * @method static Builder|AttributeValue query()
 * @method static Builder|AttributeValue whereCreatedAt($value)
 * @method static Builder|AttributeValue whereId($value)
 * @method static Builder|AttributeValue whereTitle($value)
 * @method static Builder|AttributeValue whereUpdatedAt($value)
 * @method static Builder|AttributeValue whereValue($value)
 * @mixin Eloquent
 */
class AttributeValue extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }
}
