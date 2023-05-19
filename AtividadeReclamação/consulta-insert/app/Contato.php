<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbContato";

    //campos da minha tabela
    protected $fillable = ['idContato','nome','email','laboratorio','assunto','mensagem'];

    public $timestamps=false;

    

}
