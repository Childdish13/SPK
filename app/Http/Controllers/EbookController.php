<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Http\Requests\StoreEbookRequest;
use App\Http\Requests\UpdateEbookRequest;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebooks = Ebook::all();
        // dd($ebooks);
        return view(
            'ebook.ebook',
            compact('ebooks'),
            [
                'title' => 'Ebook',
                // 'ebook' => Ebook::all(),
            ]
        );
        // compact('ebooks');
        // return view('ebook.ebook', "title" => "Ebook" compact(
        //     'datas'
        // ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        $model = new Ebook;
        return view(
            'ebook.ebook',
            compact('model'),
            [
                'title' => 'Ebook',
                // 'ebook' => Ebook::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEbookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEbookRequest $request)
    {
        $model = new Ebook;
        $model->kd_mediakonten = $request->kd_mediakonten;
        $model->judul = $request->judul;
        $model->kategori = $request->kategori;
        $model->pengarang = $request->pengarang;
        $model->penerbit = $request->penerbit;
        $model->bahasa = $request->bahasa;
        $model->save();

        return redirect('ebook');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function show(Ebook $ebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Ebook $ebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEbookRequest  $request
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEbookRequest $request, Ebook $ebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ebook $ebook)
    {
        //
    }
}
