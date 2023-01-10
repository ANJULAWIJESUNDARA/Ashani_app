<?php

namespace App\Http\Controllers;

use App\IncomeCertificates;
use Illuminate\Http\Request;

class IncomeCertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $income_cretificate =IncomeCertificates::all();
        if (request()->ajax()) {

            return datatables()->of($income_cretificate)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('income-certificate.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('income-certificate.destroy' ,$row->id).'">Delete</a>
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
        return view('admin.income-certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.income-certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $income_certificate =IncomeCertificates::create($request->all());

        return redirect()->route('income-certificate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IncomeCertificates  $incomeCertificates
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeCertificates $incomeCertificates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncomeCertificates  $incomeCertificates
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeCertificates $incomeCertificates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncomeCertificates  $incomeCertificates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncomeCertificates $incomeCertificates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncomeCertificates  $incomeCertificates
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeCertificates $incomeCertificates)
    {
        //
    }
}
