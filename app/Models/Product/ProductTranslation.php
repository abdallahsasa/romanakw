<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    use HasFactory;
    public $fillable = ['title', 'description', 'slug', 'meta_title', 'meta_description','post_id','language_id'];

}
