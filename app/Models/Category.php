<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catName',
        'slug_cate',
        'Active',
    ];
    protected $primaryKey = 'id';
    protected $table = 'categories';
     protected static function booted()
    {
        static::creating(function ($category){
            $category->catName = strtoupper($category->catName);
        });
    }
    
}
