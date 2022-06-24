<?php

namespace App\Http\Controllers;

use App\Models\katalog_ebook;
use App\Http\Requests\Storekatalog_ebookRequest;
use App\Http\Requests\Updatekatalog_ebookRequest;

class KatalogEbookController extends Controller
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
     * @param  \App\Http\Requests\Storekatalog_ebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekatalog_ebookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\katalog_ebook  $katalog_ebook
     * @return \Illuminate\Http\Response
     */
    public function show(katalog_ebook $katalog_ebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katalog_ebook  $katalog_ebook
     * @return \Illuminate\Http\Response
     */
    public function edit(katalog_ebook $katalog_ebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekatalog_ebookRequest  $request
     * @param  \App\Models\katalog_ebook  $katalog_ebook
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekatalog_ebookRequest $request, katalog_ebook $katalog_ebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katalog_ebook  $katalog_ebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(katalog_ebook $katalog_ebook)
    {
        //
    }
}
