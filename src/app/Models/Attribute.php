<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $title
 * @property int $attribute_value
 * @property int|null $product
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read AttributeValue|null $attributeValue
 * @method static Builder|Attribute newModelQuery()
 * @method static Builder|Attribute newQuery()
 * @method static Builder|Attribute query()
 * @method static Builder|Attribute whereAttributeValue($value)
 * @method static Builder|Attribute whereCreatedAt($value)
 * @method static Builder|Attribute whereId($value)
 * @method static Builder|Attribute whereProduct($value)
 * @method static Builder|Attribute whereTitle($value)
 * @method static Builder|Attribute whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Attribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attributeValue(): HasOne
    {
        return $this->hasOne(AttributeValue::class);
    }
}
