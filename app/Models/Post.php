<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    protected $with = ['category', 'author'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
