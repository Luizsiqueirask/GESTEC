<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use function PHPUnit\Framework\stringContains;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $tem_comorbidades = $this->tem_comorbidades;
        if ($tem_comorbidades == 'SIM'){ $tem_comorbidades = 'true';
        }else{ $tem_comorbidades = 'false'; }

        $vacinado_covid19 = $this->vacinado_covid19;
        if ($vacinado_covid19 == 'SIM'){ $vacinado_covid19 = 'true';
        }else{ $vacinado_covid19 = 'false'; }

        $data_nascimento = $this->data_nascimento;
        $day = substr($data_nascimento, 0, 2);
        $month = substr($data_nascimento, 2, 1);
        $year = substr($data_nascimento, 3, 2);

        $days = 31;

        if($year <= 20){
            $year = "20$year";
        }else{
            $year = "19$year";
        }

        if($month == 0){
            $month = $month + 1;
        }

        if($day > 31){
            $day = $day - $days;
            $month = $month + 1;
        }
     
        //$birthday = "$day / $month / $year";
        
        $birthday = "$year-$month-$day";
        //$birthday = date_format($this->date_forms, "Y/m/d");

        return [
            'id'                => $this->id,
            'nome'              => $this->nome,
            'data_nascimento'   => $birthday,
            'telefone'          => $this->telefone,
            'tem_comorbidades'  => $tem_comorbidades,
            'vacinado_covid19'  => $vacinado_covid19,
            /*'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'deleted_at'        => $this->deleted_at,*/
        ];
    }
}
