<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function ($table) {
            $table->string('job_title');
            $table->string('company_name');
            $table->string('job_location');
            $table->date('deadline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function ($table) {
            $table->dropColumn('job_title');
            $table->dropColumn('company_name');
            $table->dropColumn('job_location');
            $table->dropColumn('deadline');
        });
    }
}
