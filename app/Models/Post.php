<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'date', 'content', 'link'];

    // Define the "belongs to" relationship to User
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
    