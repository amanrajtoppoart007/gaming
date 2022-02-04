<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPuzzleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_puzzle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('puzzle_id');
            $table->unsignedBigInteger('option_id')->nullable();
            $table->integer('attempts')->nullable();
            $table->timestamp("started_at");
            $table->timestamp("completed_at")->nullable();
            $table->float('time_taken')->nullable();
            $table->enum("is_solved",[1,0])->nullable();
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
        Schema::dropIfExists('user_puzzle');
    }
}
