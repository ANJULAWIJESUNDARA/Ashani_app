<?php

namespace App\Http\Controllers;

use App\DeathCertificate;
use App\Expatriates;
use App\FormerGN;
use App\IncomeCertificates;
use App\Inquireis;
use App\Retirees;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.search.search');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->house_no;

        $death_certifactes = DeathCertificate::where('deceased_name' ,$name)->get();
        $expatriates = Expatriates::where('name' ,$name)->get();
        $former_g_n_s = FormerGN::where('name' , $name)->get();
        $income_certificates = IncomeCertificates::where('full_name' , $name)->get();
        $inquireis = Inquireis::where('name' , $name)->get();
        $retirees = Retirees::where('full_name' , $name)->get();
        // dd($death_certifactes , $expatriates , $former_g_n_s, $income_certificates ,$inquireis ,$retirees);

        return view('admin.search.info' , compact('death_certifactes' ,'expatriates' ,'former_g_n_s' , 'income_certificates' , 'inquireis' ,'retirees'  ));



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
