<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
        protected $table = 'admin';
        protected $fillable = ['id','name','img','loai','gia','created_at'];
}