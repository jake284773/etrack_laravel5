<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationUnitPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_unit', function (Blueprint $table) {
            $table->integer('qualification_id')->unsigned()->index();
            $table->foreign('qualification_id')->references('id')->on('qualifications')->onDelete('cascade');
            $table->integer('unit_id')->unsigned()->index();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->primary(['qualification_id', 'unit_id']);

            $table->smallInteger('number');
            $table->boolean('mandatory');
            $table->boolean('optional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('qualification_unit');
    }
}
