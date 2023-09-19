<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable=['name','slug','description','parent_id','image_name','image_url','status','featured','sort_number','sort_number','meta_title','meta_description'];
    use HasFactory;
}
