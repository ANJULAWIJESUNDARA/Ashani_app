<?php

namespace App\Http\Controllers;

use App\DeathCertificate;
use Illuminate\Http\Request;

class DeathCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $death_cretificate =DeathCertificate::all();
        if (request()->ajax()) {

            return datatables()->of($death_cretificate)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('death-certificate.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('death-certificate.destroy' ,$row->id).'">Delete</a>
                          </li>

                        </ul>
' ;
                    return $html;
                })

                ->removeColumn('created_at')
                ->removeColumn('updated_at')
                ->removeColumn('deleted_at')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.death-certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.death-certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dath = DeathCertificate::create($request->all());

        return redirect()->route('death-certificate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeathCertificate  $deathCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeathCertificate  $deathCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(DeathCertificate $deathCertificate)
    {
        $death_cretificate = $deathCertificate;

        return view('admin.death-certificate.edit' ,compact('death_cretificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeathCertificate  $deathCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeathCertificate $deathCertificate)
    {
        $deathCertificate = $deathCertificate->update($request->all());

        return redirect()->route('death-certificate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeathCertificate  $deathCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deathCertificate =DeathCertificate::find($id);
       
        $deathCertificate->delete();
        return redirect()->route('death-certificate.index');

    }
}
