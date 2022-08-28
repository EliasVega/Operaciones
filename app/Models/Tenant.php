<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    use HasFactory;

    protected $fillable = ['name', 'domain', 'database'];

    protected $guarded = [];

    public static function booted(){
        static::creating(fn(Tenant $tenant) => $tenant->createDatabase($tenant));
        static::created(fn(Tenant $tenant) => $tenant->runMigrationsSeeders($tenant));
    }

    public function createDatabase($tenant){

        DB::connection('tenant')->statement("CREATE DATABASE  {$tenant->database};");
        /*$database_name = parse_url(config('app.url'), PHP_URL_HOST).'_'.$tenant->name;
        $database = Str::of($tenant->database);
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA_SCHEMATA WHERE SCHEMA_NAME = ?";
        $db = DB::select($query, [$database]);
        if (empty($db)) {
            DB::connection('tenant')->statement("CREATE DATABASE {$database};");
            $tenant->database = $database;
        }
        return $database;*/
    }

    public function runMigrationsSeeders($tenant){
        $tenant->refresh();
        Artisan::call('tenants:artisan', [
            'artisanCommand' => 'migrate --database=tenant --seed --force',
            '--tenant' => "{$tenant->id}",
        ]);
    }
}
