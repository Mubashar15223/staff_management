<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdsPay;

class AdsPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adsPays = AdsPay::all();
        
        return view('expenses.adsPay.index', compact('adsPays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.adsPay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adsPay = new AdsPay();
        $adsPay->company = $request->company;
        $adsPay->adsWebsite = $request->adsWebsite;
        $adsPay->month = $request->month;
        $adsPay->paidMonth = $request->paidMonth;
        $adsPay->engagedTraffic = $request->engagedTraffic;
        $adsPay->promotedWebsite = $request->promotedWebsite;
        $adsPay->description = $request->description;
        $adsPay->save();
        return redirect()->route('adsPay.index')->with('message', 'The AdsPay has been saved successfully');
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
        $adsPay = AdsPay::findOrFail($id);
        return view('expenses.adsPay.edit', compact('adsPay'));
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
        $adsPay = AdsPay::findOrFail($id);
        $adsPay->company = $request->company;
        $adsPay->adsWebsite = $request->adsWebsite;
        $adsPay->month = $request->month;
        $adsPay->paidMonth = $request->paidMonth;
        $adsPay->engagedTraffic = $request->engagedTraffic;
        $adsPay->promotedWebsite = $request->promotedWebsite;
        $adsPay->description = $request->description;
        $adsPay->update();
        return redirect()->route('adsPay.index')->with('message', 'The AdsPay has been saved successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adsPay = AdsPay::findOrFail($id); // Find the item to be deleted
        $adsPay->delete(); // Delete the item from the database
        return redirect()->route('adsPay.index')->with('success', 'Hosting Server deleted successfully.'); // Redirect to the index page with a success message
    }
}
