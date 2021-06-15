<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class PatientSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->file                     = '/database/seeders/xlsx/lista_pacientes.xlsx';
        $this->tablename                = 'list_patients';

        $this->aliases = [
            '#'                                     => 'id',
            'NOME'                                  => 'nome',
            'DATA DE NASCIMENTO'                    => 'data_nascimento',
            'TELEFONE'                              => 'telefone',
            'TEM COMORBIDADES?'                     => 'tem_comorbidades',
            'JÁ FOI VACINADO CONTRA A COVID 19'     => 'vacinado_covid19'
        ];

        parent::run();

    }
}
