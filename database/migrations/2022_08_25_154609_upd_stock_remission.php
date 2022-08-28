<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdStockRemission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER updStockRemission AFTER INSERT ON operation_remissions
            FOR EACH ROW
            BEGIN
                UPDATE operations SET stock = stock + NEW.quantity
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
        DB::unprepared('DROP TRIGGER `updStockRemission`');
    }
}
