<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Http\Requests\StoreSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;

class SchoolsController extends Controller
{
    public function index(){
        return view('schoolseeing',[
            "pagetitle" => "projek",
        "maintitle" => "projek data",
        'projects' => Schools::all(),
        "ActiveProjek"=> "active"
        ]);
    }
    public function bruh($id){
        $project = Schools::find($id);
            return view('show',[
                'pagetitle' => 'project',
                'maintitle' => 'project Data',
                'project'=> $project,
            ]);

}
}