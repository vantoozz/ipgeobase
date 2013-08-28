<?php

use Illuminate\Database\Migrations\Migration;

class UpdateIpgeobaseTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'ipgeobase_cities',
            function ($table) {
                $table->string('country', 2)->after('district');
                $table->index('country');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'ipgeobase_cities',
            function ($table) {
                $table->dropColumn('country');
            }
        );
    }

}