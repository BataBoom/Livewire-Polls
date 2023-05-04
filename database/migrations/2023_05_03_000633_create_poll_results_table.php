<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('poll_results', function (Blueprint $table) {
        $table->id();
        $table->string('selection');
        $table->foreignId('poll_id')->references('id')->on('polls')->onDelete('cascade');
        $table->foreignId('poll_option_id')->references('id')->on('poll_options')->onDelete('cascade');
        $table->foreignId('user_id')->references('id')->on('users');
        $table->timestamp('created_at');
        
        $table->unique(['user_id', 'poll_id']);
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_results');
    }
}
