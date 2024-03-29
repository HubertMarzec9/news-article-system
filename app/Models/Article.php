<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'text', 'author_id'];

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
