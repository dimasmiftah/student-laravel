<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // declare the scheme of students table 
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nim', 8)->unique();
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop students table if exist
        Schema::dropIfExists('students');
    }
}
