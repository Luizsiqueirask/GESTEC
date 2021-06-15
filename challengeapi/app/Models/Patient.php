<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $table        = "list_patients";
    protected $guarded      = "id";
    protected $fillable     = ["nome", "data_nascimento", "telefone", "tem_comorbidades", "vacinado_covid19"];
    protected $dates        = ["created_at", "updated_at", "deleted_at"];
}
