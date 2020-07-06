<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // using softdeletes feature which will add deleted_at attribute to deleted data insted of 
    // remove it from the database
    use SoftDeletes;
    // declare which attributes is fillable to allow mass assignment, the rest attributes will be guarded
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
