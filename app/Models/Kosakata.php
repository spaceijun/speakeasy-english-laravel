<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kosakata
 *
 * @property $id
 * @property $name
 * @property $images
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Kosakata extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'images', 'description'];


}
