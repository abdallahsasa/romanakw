<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategoryTranslation extends Model
{
    protected $fillable=['name','slug','description','meta_title','meta_description','category_id','language_id'];
    use HasFactory;
}
