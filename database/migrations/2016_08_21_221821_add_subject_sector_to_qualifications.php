<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubjectSectorToQualifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qualifications', function (Blueprint $table) {
            $table->integer('subject_sector_id')->unsigned();
            $table->foreign('subject_sector_id')->references('id')->on('subject_sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qualifications', function (Blueprint $table) {
            $table->dropForeign('qualifications_subject_sector_id_foreign');
            $table->dropColumn('subject_sector_id');
        });
    }
}
