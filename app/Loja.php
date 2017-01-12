<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model{
	protected $primaryKey = 'ID';
    protected $fillable  = ['Nome','Logo','HoraAbre','HoraFecha','Descricao'];
}
