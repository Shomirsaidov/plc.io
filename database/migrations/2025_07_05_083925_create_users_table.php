<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user'); // assuming 'user' or 'admin' roles
            $table->rememberToken(); // adds a nullable string column 'remember_token'
            $table->timestamps(); // adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
