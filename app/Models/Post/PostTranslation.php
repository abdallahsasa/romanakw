<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;
    public $fillable = ['title', 'description', 'slug', 'meta_title', 'meta_description','post_id','language_id'];

}
