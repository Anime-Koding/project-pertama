<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteLanguageRequest;
use App\Http\Requests\UpdateSiteLanguageRequest;
use App\Models\SiteLanguage;

class SiteLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiteLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteLanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteLanguage  $siteLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(SiteLanguage $siteLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteLanguage  $siteLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteLanguage $siteLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiteLanguageRequest  $request
     * @param  \App\Models\SiteLanguage  $siteLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiteLanguageRequest $request, SiteLanguage $siteLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteLanguage  $siteLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteLanguage $siteLanguage)
    {
        //
    }
}
