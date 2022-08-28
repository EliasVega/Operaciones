<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Tenant::current()==null) {
            $this->call(UserSeeder::class);
        } else {
            // \App\Models\User::factory(10)->create();
            $this->call(DepartmentSeeder::class);
            $this->call(MunicipalitySeeder::class);
            $this->call(DocumentSeeder::class);
            $this->call(RoleSeeder::class);
            $this->call(CompanySeeder::class);
            $this->call(BankSeeder::class);
            $this->call(PaymentMethodSeeder::class);
            $this->call(CategorySeeder::class);
            $this->call(OperationSeeder::class);
            $this->call(UserSeeder::class);
        }
    }
}
