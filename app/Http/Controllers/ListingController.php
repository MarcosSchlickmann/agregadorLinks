<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Dashboard;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "name" => ['required', 'string', 'max:30']
        ]);
        $listing = Listing::create($validated);
        foreach ($request->associate_dashboards as $key => $associate_ashboard_id) {
            $dashboard = Dashboard::find($associate_ashboard_id);
            $dashboard->listings()->attach($listing);
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/home');
    }
}
