<?php

namespace App\Http\Controllers;

use App\Http\Controllers\update;
use App\Http\Requests\CreateProjectRequest;
use App\Project;
use Illuminate\Database\Eloquent\Relations\paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    
    public function __construct(){
      $this->middleware("auth")->except("index","show");//
    }
    public function index()
    {
             //  $portfolio=DB::table("project")->get();
        // $portfolio=Project::get();
       //  $portfolio=Project::orderBy("created_at","DESC")->get();
         $project=Project::latest("created_at")->paginate(2);  //CON PAGINACION
        return view("project.index", compact("project"));
    }
//usamos Route model Bulding
    public function show(Project $project){
    //   $project=Project::findOrFail($id);
      //  return view("project/show", compact("project"));
  /*
       return view("project.show", [
            "project"=>Project::findOrFail($id)
        ]);
  */
        return view("project.show", [
                "project"=>$project
        ]); 
      
    }

  public function create(){
      $project=new Project();
    return view("project.create", compact("project"));
  }

  public function store(CreateProjectRequest $request){
    //comprobamos si estan validados los datos del formulario
    $result=$request->validated();
    //agregamos a la base
    Project::create($result);
    return redirect()->route("project.index")->with("estado","se ha creado satisfactoriamente");

        //otra forma de hacerlo
    //primero quitar el parametro request
    // Project::create(request()->all());
    //return redirect()->route("project.index");
    //------------------------------------------
  }

  public function edit(Project $project){
     return view("project.edit", [
                "project"=>$project
        ]); 
  }


public function update(Project $project,CreateProjectRequest $request){
   $result=$request->validated();
   /* $project->update([
        "title"=>request("title"),
        "url"=>request("url"),
        "description"=>request("description"),

    ]);
  */
    $project->update($result);
    return redirect()->route("project.show", $project)->with("estado","se ha actualizado satisfactoriamente");;
}

public function destroy(Project $project){
    $project->delete();
        return redirect()->route("project.index")->with("estado","se ha eliminado satisfactoriamente");;
}
}