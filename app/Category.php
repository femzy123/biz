<?php

namespace App;

use App\Listing;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
}
