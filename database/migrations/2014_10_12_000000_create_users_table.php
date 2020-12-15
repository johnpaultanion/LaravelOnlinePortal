<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->string('school_address');
            $table->string('yeargrad');
            $table->string('mobile_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password')->nullable();
            $table->string('role')->default('student');
            $table->string('provider_id')->nullable();
            $table->string('device_uuid')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->rememberToken();
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
