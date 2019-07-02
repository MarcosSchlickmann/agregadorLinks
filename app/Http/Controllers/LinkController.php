<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
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
            "url" => ['required', 'string', 'max:255'],
            "listing_id" => ['required', 'integer']
        ]);

        if(substr($validated["url"], 0, 4) !== "http")
            $validated["url"] = "http".":"."//" . $validated["url"];


        $validated["name"] = ucfirst(explode(".", $validated["url"])[1]);
        Link::create($validated);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect('/home');
    }
}
