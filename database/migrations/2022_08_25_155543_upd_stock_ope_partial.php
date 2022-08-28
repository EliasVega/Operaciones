<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdStockOpePartial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER updStockOpePartial AFTER INSERT ON operating_partials
            FOR EACH ROW
            BEGIN
                UPDATE operations SET stock = stock - NEW.quantity
                WHERE operations.id = NEW.operation_id;
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
        DB::unprepared('DROP TRIGGER `updStockOpePartial`');
    }
}
