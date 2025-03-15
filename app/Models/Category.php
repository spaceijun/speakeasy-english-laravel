<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class Category
 *
 * @property $id
 * @property $name
 * @property $images
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property SpeakeasyEnglish.grammar[] $speakeasyEnglish.grammars
 * @property SpeakeasyEnglish.hafalan[] $speakeasyEnglish.hafalans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{

    use HasFactory, HasApiTokens;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'category';
    protected $fillable = ['name', 'images', 'description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grammars()
    {
        return $this->hasMany(\App\Models\grammar::class, 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function hafalans()
    {
        return $this->hasMany(\App\Models\hafalan::class, 'id', 'category_id');
    }
}
