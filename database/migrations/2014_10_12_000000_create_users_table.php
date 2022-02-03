<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string("phone")->unique()->nullable();
            $table->integer('wallet')->default(0);
            $table->string('job')->nullable();
            $table->string('national_number')->nullable();
            $table->integer('point')->default(0);
            $table->string('ip')->nullable();
            $table->string('password')->nullable();
            $table->boolean('two_factor')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('is_superuser')->default(0);
            $table->enum('two_factor_method', \App\Models\User::$two_factor_types);
            $table->rememberToken()->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
