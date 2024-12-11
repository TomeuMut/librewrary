<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function grains()
    {
        return $this->belongsToMany(Grain::class,'recipe_grain');
    }

    public function hops()
    {
        return $this->belongsToMany(Hop::class,'recipe_hop');
    }

    public function yeasts()
    {
        return $this->belongsToMany(Yeast::class,'recipe_yeast');
    }
    
    public function fermentables()
    {
        return $this->belongsToMany(Fermentable::class,'recipe_fermentable');
    }
    
    public function otheringredients()
    {
        return $this->belongsToMany(OtherIngredient::class,'recipe_otheringredients');
    }
}
