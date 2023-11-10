<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;

class TeachersController extends Controller
{
    public function index(){
        return view('ViewTeacher',[
            "pagetitle" => "projek",
        "maintitle" => "projek data",
        'projects' => Teachers::all(),
        "ActiveProjek"=> "active"
        ]);
    }

    public function bruh($id){
        $project = Teachers::find($id);
            return view('show',[
                'pagetitle' => 'project',
                'maintitle' => 'project Data',
                'project'=> $project,
            ]);

}
}
