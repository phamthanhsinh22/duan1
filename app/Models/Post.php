<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug_title',
        'content',
        'summary',
        'images',
        'hot',
        'trending',
        'active',
        'type_id',
    ];
    protected $primaryKey = 'id';
    protected $table = 'posts';
    public function types(){
        return $this->belongsTo('App\Models\Type','type_id','id');
    }
}
