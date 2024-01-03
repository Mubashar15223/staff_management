<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApiServer;

class ApiServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiServers = ApiServer::all();
        foreach($apiServers as $key => $item){
            $apiServers[$key]->purchaseDate = date('j M Y', strtotime($item->purchaseDate));
                $date = new \DateTime($item->purchaseDate);
                $date->add(new \DateInterval('P'.$item->months.'M'));
                $formattedDate = $date->format('j M Y');
            $apiServers[$key]->expDate = $formattedDate;
        }

        return view('expenses.apiServer.index',compact('apiServers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('expenses.apiServer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $server = new ApiServer();
        $server->name = $request->name;
        $server->company = $request->company;
        $server->website = $request->website;
        $server->packageName = $request->packageName;
        $server->purchaseDate = $request->purchaseDate;
        $server->months = $request->months;
        $server->amount = $request->amount;
        $server->renewalAmount = $request->renewalAmount;
        $server->allowed = $request->allowed;
        $server->description = $request->description;
        $server->save();
        return redirect()->route('apiServer.index')->with('message', 'The Hosting Server has been saved successfully');
        
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
        $apiServer = ApiServer::findOrFail($id);
        return view('expenses.apiServer.edit', compact('apiServer'));
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
        $server = ApiServer::findOrFail($id);
        $server->name = $request->name;
        $server->company = $request->company;
        $server->website = $request->website;
        $server->packageName = $request->packageName;
        $server->purchaseDate = $request->purchaseDate;
        $server->months = $request->months;
        $server->amount = $request->amount;
        $server->renewalAmount = $request->renewalAmount;
        $server->allowed = $request->allowed;
        $server->description = $request->description;
        $server->update();
        return redirect()->route('apiServer.index')->with('message', 'The Hosting Server has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $server = ApiServer::findOrFail($id); // Find the item to be deleted
        $server->delete(); // Delete the item from the database
        return redirect()->route('apiServer.index')->with('success', 'Hosting Server deleted successfully.'); // Redirect to the index page with a success message
    }

}
