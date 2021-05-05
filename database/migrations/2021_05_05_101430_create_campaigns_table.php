<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->boolean('program_khb');
            $table->string('title', 255);
            $table->boolean('featured');
            $table->boolean('open_target');
            $table->boolean('expiring');
            $table->integer('funding_target');
            $table->string('slug', 255);
            $table->dateTime('end_campaign');
            $table->dateTime('start_campaign');
            $table->text('cover_image');
            $table->boolean('youtube');
            $table->text('short_description');
            $table->longText('description');
            $table->text('tipe');
            $table->integer('total_fund');
            $table->integer('total_fundraiser');
            $table->boolean('published');
            $table->integer('total_donatur');
            $table->text('icon');
            $table->boolean('status_campaign');
            $table->string('location_campaign', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
