<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Software;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $softwares = Software::all();
        foreach($softwares as $key => $item){
            $softwares[$key]->purchaseDate = date('j M Y', strtotime($item->purchaseDate));
                $date = new \DateTime($item->purchaseDate);
                $date->add(new \DateInterval('P'.$item->months.'M'));
                $formattedDate = $date->format('j M Y');
            $softwares[$key]->expDate = $formattedDate;
        }
        return view('expenses.software.index', compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.software.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->tags);
        $array = json_decode($request->tags, true);
        $tagsArray = array_map(function ($item) {
            return $item['value'];
        }, $array);

        $software = new Software();
        $software->companyName = $request->companyName;
        $software->platformWebsite = $request->platformWebsite;
        $software->packageName = $request->packageName;
        $software->priceType = $request->priceType;
        $software->purchaseDate = $request->purchaseDate;
        $software->months = $request->months;
        $software->supportPeriod = $request->supportPeriod;
        $software->amount = $request->amount;
        $software->renewalAmount = $request->renewalAmount;
        $software->allowed = $request->allowed;
        $software->description = $request->description;
        $software->tags = json_encode($tagsArray);
        $software->save();
        return redirect()->route('software.index')->with('message', 'The Software has been saved successfully');
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
        $software = Software::findOrFail($id);
        return view('expenses.software.edit', compact('software'));
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
        $software = Software::findOrFail($id);
        $software->companyName = $request->companyName;
        $software->platformWebsite = $request->platformWebsite;
        $software->priceType = $request->priceType;
        $software->purchaseDate = $request->purchaseDate;
        $software->months = $request->months;
        $software->supportPeriod = $request->supportPeriod;
        $software->amount = $request->amount;
        $software->renewalAmount = $request->renewalAmount;
        $software->allowed = $request->allowed;
        $software->description = $request->description;
        $software->update();
        return redirect()->route('software.index')->with('message', 'The Software has been saved successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $software = Software::findOrFail($id); // Find the item to be deleted
        $software->delete(); // Delete the item from the database
        return redirect()->route('software.index')->with('success', 'The Software deleted successfully.'); // Redirect to the index page with a success message
    }
}
