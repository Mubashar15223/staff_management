<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plugin;

class PluginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plugins = Plugin::all();
        foreach($plugins as $key => $item){
            $plugins[$key]->purchaseDate = date('j M Y', strtotime($item->purchaseDate));
                $date = new \DateTime($item->purchaseDate);
                $date->add(new \DateInterval('P'.$item->months.'M'));
                $formattedDate = $date->format('j M Y');
            $plugins[$key]->expDate = $formattedDate;
        }
        return view('expenses.plugins.index', compact('plugins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.plugins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plugin = new Plugin();
        $plugin->platformName = $request->platformName;
        $plugin->platformWebsite = $request->platformWebsite;
        $plugin->pluginName = $request->pluginName;
        $plugin->priceType = $request->priceType;
        $plugin->purchaseDate = $request->purchaseDate;
        $plugin->months = $request->months;
        $plugin->supportPeriod = $request->supportPeriod;
        $plugin->amount = $request->amount;
        $plugin->renewalAmount = $request->renewalAmount;
        $plugin->allowed = $request->allowed;
        $plugin->description = $request->description;
        $plugin->save();
        return redirect()->route('plugin.index')->with('message', 'The Plugin has been saved successfully');
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
        $plugin = Plugin::findOrFail($id);
        return view('expenses.plugins.edit', compact('plugin'));
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
        $plugin = Plugin::findOrFail($id);
        $plugin->platformName = $request->platformName;
        $plugin->platformWebsite = $request->platformWebsite;
        $plugin->pluginName = $request->pluginName;
        $plugin->priceType = $request->priceType;
        $plugin->purchaseDate = $request->purchaseDate;
        $plugin->months = $request->months;
        $plugin->supportPeriod = $request->supportPeriod;
        $plugin->amount = $request->amount;
        $plugin->renewalAmount = $request->renewalAmount;
        $plugin->allowed = $request->allowed;
        $plugin->description = $request->description;
        $plugin->update();
        return redirect()->route('plugin.index')->with('message', 'The Plugin has been saved successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plugin = Plugin::findOrFail($id); // Find the item to be deleted
        $plugin->delete(); // Delete the item from the database
        return redirect()->route('plugin.index')->with('success', 'The plugin deleted successfully.'); // Redirect to the index page with a success message
    }
}
