<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategories()
    {
        return $this->belongsTo(SubCatgeory::class, 'subcategory_id');
    }
}
