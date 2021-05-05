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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->text('two_factor_secret');
            $table->text('two_factor_recovery_codes');
            $table->foreignId('current_team_id');
            $table->text('profile_photo_path');
            $table->integer('number_hp');
            $table->text('status_verif');
            $table->mediumText('location');
            $table->text('twitter');
            $table->text('instagram');
            $table->text('linkedin');
            $table->text('facebook');
            $table->integer('max_campaign');
            $table->boolean('is_login_active');
            $table->text('photo');
            $table->integer('no_ktp');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
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
