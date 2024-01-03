<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Software;
use App\Models\Plugin;
use App\Models\ApiServer;
use App\Models\Server;
use App\Models\Category;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $softwares = Software::get();
        $apiServer = apiServer::get();
        $plugins = Plugin::get();
        $servers = Server::get();
        $categories = Category::get();
        // dd($plugins);
       
        return View('projects.create_project', compact('servers','plugins','softwares','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $project = new Project();
        $project->title= $request->title;
        $project->code=$request->code;
        $project->description = $request->description;
        $project->server_id = $request->server_id;
        $project->key_features = json_encode($request->key_feature);
        $project->paid_plugin = json_encode($request->paid_plugin);
        $project->first_year_amount_of_domain = $request->first_year_amount_of_domain;
        $project->recurring_amount_of_domain  = $request->recurring_amount_of_domain;
        $project->save();
        
        return [
            'status'=> true,
            'message'=> 'The project has been saved successfully'
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function under_development()
    {
       $projects = Project::latest()->get(); 
       return view('projects.under_development_project', compact('projects'));
    }
}
