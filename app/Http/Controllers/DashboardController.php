<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "name" => ['required', 'string', 'max:60']
        ]);
        $validated["user_id"] = auth()->user()->id;
        Dashboard::create($validated);
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        $dashboard->delete();
        return redirect("/home");
    }
}
