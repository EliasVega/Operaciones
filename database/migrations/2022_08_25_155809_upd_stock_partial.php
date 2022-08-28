<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdStockPartial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER updStockPartial AFTER INSERT ON operating_partials
            FOR EACH ROW
            BEGIN
                UPDATE operatings SET operating = operating - NEW.quantity
                WHERE operatings.id = NEW.operating_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `updStockPartial`');
    }
}
