<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['id', 'title', 'description', 'created_at', 'updated_at'];
}