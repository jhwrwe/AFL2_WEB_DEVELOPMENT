<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Http\Requests\StoreSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;

class SchoolsController extends Controller
{
    public function index(){
        return view('view_schools',[
            "pagetitle" => "projek",
        "maintitle" => "projek data",
        'projects' => Schools::all(),
        "ActiveProjek"=> "active"
        ]);
    }
    public function Show_Schools_info($id){
        $project = Schools::find($id);
            return view('Schools_info',[
                'pagetitle' => 'project',
                'maintitle' => 'project Data',
                'project'=> $project,
            ]);

}
}
