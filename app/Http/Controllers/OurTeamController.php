<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Http\Requests\StoreOurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('schoolseeing',[
            "pagetitle" => "projek",
        "maintitle" => "projek data",
        'projects' => OurTeam::all(),
        "ActiveProjek"=> "active"
        ]);
    }
    public function bruh($id){
        $project = OurTeam::find($id);
            return view('show',[
                'pagetitle' => 'project',
                'maintitle' => 'project Data',
                'project'=> $project,
            ]);

}
}
