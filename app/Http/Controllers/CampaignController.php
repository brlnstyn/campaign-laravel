<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return view('campaigns.index');
    }

    public function store(Request $request)
    {
        dd($request);
        $data = $request->all();
        Campaign::create($data);
        return redirect()->route('campaigns.index')->with('success', 'Campaign created successfully!');
    }
}
