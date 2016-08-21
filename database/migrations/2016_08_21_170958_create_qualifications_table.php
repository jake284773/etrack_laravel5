<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qn');
            $table->string('pathway')->nullable();
            $table->unique(['qn', 'pathway']);
            $table->string('name');
            $table->string('framework');
            $table->smallInteger('level');
            $table->smallInteger('total_credits');
            $table->smallInteger('mandatory_credits');
            $table->smallInteger('optional_credits');
            $table->smallInteger('min_credits_at_above_level')->nullable();
            $table->smallInteger('max_optional_other_credits')->nullable();
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
        Schema::drop('qualifications');
    }
}
