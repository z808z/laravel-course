<?php

namespace App\Http\Models;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\Article
 *
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $fillable = ['title', 'description', 'content', 'created_at', 'updated_at'];
}
