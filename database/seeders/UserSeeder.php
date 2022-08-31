<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Tenant::current()) {
            $user = new User();

            //$user->company_id = 1;
            $user->document_id = 2;
            $user->role_id = 1;
            $user->bank_id = 1;
            $user->payment_method_id = 3;
            $user->name = 'ELIAS VEGA DELGADO';
            $user->number = '91260182';
            $user->address = 'Carrera 21 # 99-27 Fontana';
            $user->phone = '3168886468';
            $user->email = 'discom.is@gmail.com';
            $user->password = bcrypt('matrix2012');
            $user->position = 'Administrador Sistema';
            $user->reference = '124578';
            $user->status = 'ACTIVO';

            $user->save();


        } else {
            $user = new User();

            $user->name = 'ELIAS VEGA DELGADO';
            $user->email = 'discom.is@gmail.com';
            $user->password = bcrypt('matrix2012');

            $user->save();
        }
    }
}
