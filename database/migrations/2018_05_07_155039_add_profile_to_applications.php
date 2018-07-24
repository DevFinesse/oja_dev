<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function ($table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->bigInteger('phone_number');
            $table->string('education');
            $table->string('specialization');
            $table->string('cv');
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
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('email');
            $table->dropColumn('phone_number');
            $table->dropColumn('education');
            $table->dropColumn('specialization');
            $table->dropColumn('cv');
        });
    }
}
