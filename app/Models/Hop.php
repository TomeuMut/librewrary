<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hop extends Model
{
    use HasFactory;

    // protected $table = ['hops'];    

    protected $fillable = ['name','description','type','decimal'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class,'recipe_hop');
    }
}
