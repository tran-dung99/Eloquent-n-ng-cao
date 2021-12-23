<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   protected $fillable = ["title","content","user_id"];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
    public function checkCategory($categoryId) {
        foreach ($this->categories as $category) {
            if($category->id == $categoryId) {
                return true;
            }
        }
        return false;
    }
}
