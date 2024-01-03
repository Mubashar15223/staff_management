<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::all();
        foreach($themes as $key => $item){
            $themes[$key]->purchaseDate = date('j M Y', strtotime($item->purchaseDate));
                $date = new \DateTime($item->purchaseDate);
                $date->add(new \DateInterval('P'.$item->months.'M'));
                $formattedDate = $date->format('j M Y');
            $themes[$key]->expDate = $formattedDate;
        }
        return view('expenses.themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.themes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theme = new Theme();
        $theme->platformName = $request->platformName;
        $theme->platformWebsite = $request->platformWebsite;
        $theme->themeName = $request->themeName;
        $theme->priceType = $request->priceType;
        $theme->purchaseDate = $request->purchaseDate;
        $theme->months = $request->months;
        $theme->supportPeriod = $request->supportPeriod;
        $theme->amount = $request->amount;
        $theme->renewalAmount = $request->renewalAmount;
        $theme->allowed = $request->allowed;
        $theme->description = $request->description;
        $theme->save();
        return redirect()->route('theme.index')->with('message', 'The Theme has been saved successfully');
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
        $theme = Theme::findOrFail($id);
        return view('expenses.themes.edit', compact('theme'));
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
        $theme = Theme::findOrFail($id);
        $theme->platformName = $request->platformName;
        $theme->platformWebsite = $request->platformWebsite;
        $theme->themeName = $request->themeName;
        $theme->priceType = $request->priceType;
        $theme->purchaseDate = $request->purchaseDate;
        $theme->months = $request->months;
        $theme->supportPeriod = $request->supportPeriod;
        $theme->amount = $request->amount;
        $theme->renewalAmount = $request->renewalAmount;
        $theme->allowed = $request->allowed;
        $theme->description = $request->description;
        $theme->update();
        return redirect()->route('theme.index')->with('message', 'The Theme has been saved successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::findOrFail($id); // Find the item to be deleted
        $theme->delete(); // Delete the item from the database
        return redirect()->route('theme.index')->with('success', 'Hosting Server deleted successfully.'); // Redirect to the index page with a success message
    }
}
