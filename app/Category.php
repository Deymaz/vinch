<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'parent_category_id', 'created_at', 'updated_at'];
}
