<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->foreignId('user_id');
            $table->foreignId('campaign_id');
            $table->boolean('anonymous');
            $table->integer('amount');
            $table->text('tipe');
            $table->mediumText('note');
            $table->string('slug',255);
            $table->text('struck');
            $table->string('status',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
