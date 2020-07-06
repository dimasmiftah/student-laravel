<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // declaring custom table name because the default behavior of a model is expecting their table
    // to have plural verion of model's name which in this case 'mahasiswas' and not 'mahasiswa'
    protected $table = 'mahasiswa';
}
