<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'name', 'description', 'email', 'phone', 'website', 'address', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
