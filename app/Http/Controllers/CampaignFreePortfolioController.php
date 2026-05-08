<?php

namespace App\Http\Controllers;

use App\Models\CampaignFreePortfolio;
use Illuminate\Http\Request;

class CampaignFreePortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('campaign-free-portfolio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'      => ['required', 'string', 'max:255'],
            'email'          => ['required', 'email', 'max:255'],
            'facebook_link'  => ['nullable', 'url'],
            'social_link'    => ['nullable', 'url'],
            'why_need'       => ['required'],
            'why_deserve'    => ['required'],
        ]);

        CampaignFreePortfolio::create([
            'full_name'      => $request->full_name,
            'email'          => $request->email,
            'facebook_link'  => $request->facebook_link,
            'social_link'    => $request->social_link,
            'why_need'       => $request->why_need,
            'why_deserve'    => $request->why_deserve,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CampaignFreePortfolio $campaignFreePortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampaignFreePortfolio $campaignFreePortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampaignFreePortfolio $campaignFreePortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampaignFreePortfolio $campaignFreePortfolio)
    {
        //
    }
}
