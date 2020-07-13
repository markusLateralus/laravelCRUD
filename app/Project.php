<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//creo esta variable porque es en singular
    protected $table="project";
    //agregar todos los campos de la tabla QUE QUEREMOS ACTUALIZAR
    //a esto se le llama ASIGNACION MASIVA
    //protected $fillable=["title","url","description"];
    protected $guarded=[];//en el controlador NUNCA DEBO USAR REQUEST()->ALL, si lo hago debo cambiar esta propiedadd por $fillable
    public function getRouteKeyName(){
    	return "url";
    }
}
