<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();

        $department->code = '05';
        $department->name = 'ANTIOQUIA';
        $department->codeISO = 'ANT';

        $department->save();

        $department = new Department();

        $department->code = '08';
        $department->name = 'ATLANTICO';
        $department->codeISO = 'ATL';

        $department->save();

        $department = new Department();

        $department->code = '11';
        $department->name = 'BOGOTA';
        $department->codeISO = 'DC';

        $department->save();

        $department = new Department();

        $department->code = '13';
        $department->name = 'BOLIVAR';
        $department->codeISO = 'BOL';

        $department->save();

        $department = new Department();

        $department->code = '15';
        $department->name = 'BOYACA';
        $department->codeISO = 'BOY';

        $department->save();

        $department = new Department();

        $department->code = '17';
        $department->name = 'CALDAS';
        $department->codeISO = 'CAL';

        $department->save();

        $department = new Department();

        $department->code = '18';
        $department->name = 'CAQUETA';
        $department->codeISO = 'CAQ';

        $department->save();

        $department = new Department();

        $department->code = '19';
        $department->name = 'CAUCA';
        $department->codeISO = 'CAU';

        $department->save();

        $department = new Department();

        $department->code = '20';
        $department->name = 'CESAR';
        $department->codeISO = 'CES';

        $department->save();

        $department = new Department();

        $department->code = '27';
        $department->name = 'CHOCO';
        $department->codeISO = 'CHO';

        $department->save();

        $department = new Department();

        $department->code = '23';
        $department->name = 'CORDOBA';
        $department->codeISO = 'COR';

        $department->save();

        $department = new Department();

        $department->code = '25';
        $department->name = 'CUNDINAMARCA';
        $department->codeISO = 'CUN';

        $department->save();

        $department = new Department();

        $department->code = '41';
        $department->name = 'HUILA';
        $department->codeISO = 'HUI';

        $department->save();

        $department = new Department();

        $department->code = '44';
        $department->name = 'LA GUAJIRA';
        $department->codeISO = 'LAG';

        $department->save();

        $department = new Department();

        $department->code = '47';
        $department->name = 'MAGDALENA';
        $department->codeISO = 'MAG';

        $department->save();

        $department = new Department();

        $department->code = '50';
        $department->name = 'META';
        $department->codeISO = 'MET';

        $department->save();

        $department = new Department();

        $department->code = '52';
        $department->name = 'NARIÑO';
        $department->codeISO = 'NAR';

        $department->save();

        $department = new Department();

        $department->code = '54';
        $department->name = 'NORTE DE SANTANDER';
        $department->codeISO = 'NSA';

        $department->save();

        $department = new Department();

        $department->code = '63';
        $department->name = 'QUINDIO';
        $department->codeISO = 'QUI';

        $department->save();

        $department = new Department();

        $department->code = '66';
        $department->name = 'RISARALDA';
        $department->codeISO = 'RIS';

        $department->save();

        $department = new Department();

        $department->code = '68';
        $department->name = 'SANTANDER';
        $department->codeISO = 'SAN';

        $department->save();

        $department = new Department();

        $department->code = '70';
        $department->name = 'SUCRE';
        $department->codeISO = 'SUC';

        $department->save();

        $department = new Department();

        $department->code = '73';
        $department->name = 'TOLIMA';
        $department->codeISO = 'TOL';

        $department->save();

        $department = new Department();

        $department->code = '76';
        $department->name = 'VALLE DEL CAUCA';
        $department->codeISO = 'VAC';

        $department->save();

        $department = new Department();

        $department->code = '81';
        $department->name = 'ARAUCA';
        $department->codeISO = 'ARA';

        $department->save();

        $department = new Department();

        $department->code = '85';
        $department->name = 'CASANARE';
        $department->codeISO = 'CAS';

        $department->save();

        $department = new Department();

        $department->code = '86';
        $department->name = 'PUTUMAYO';
        $department->codeISO = 'PUT';

        $department->save();

        $department = new Department();

        $department->code = '88';
        $department->name = 'SAN ANDRES Y PROVIDENCIA';
        $department->codeISO = 'SAP';

        $department->save();

        $department = new Department();

        $department->code = '91';
        $department->name = 'AMAZONAS';
        $department->codeISO = 'AMA';

        $department->save();

        $department = new Department();

        $department->code = '94';
        $department->name = 'GUAINIA';
        $department->codeISO = 'GUA';

        $department->save();

        $department = new Department();

        $department->code = '95';
        $department->name = 'GUAVIARE';
        $department->codeISO = 'GUV';

        $department->save();

        $department = new Department();

        $department->code = '97';
        $department->name = 'VAUPES';
        $department->codeISO = 'VAU';

        $department->save();

        $department = new Department();

        $department->code = '99';
        $department->name = 'VICHADA';
        $department->codeISO = 'VID';

        $department->save();
    }
}
