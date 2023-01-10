<?php

namespace App\Http\Controllers;

use App\CashReciept;
use Illuminate\Http\Request;

class CashRecieptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cash_reciept =CashReciept::all();
        if (request()->ajax()) {

            return datatables()->of($cash_reciept)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('cash-reciept.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('cash-reciept.destroy' ,$row->id).'">Delete</a>
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
        return view('admin.cash-reciept.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.cash-reciept.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cash_reciept = CashReciept::create($request->all());

        return redirect()->route('cash-reciept.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashReciept  $cashReciept
     * @return \Illuminate\Http\Response
     */
    public function show(CashReciept $cashReciept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashReciept  $cashReciept
     * @return \Illuminate\Http\Response
     */
    public function edit(CashReciept $cashReciept)
    {

        $cashReciept= $cashReciept;

        return view('admin.cash-reciept.edit' ,compact('cashReciept'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashReciept  $cashReciept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashReciept $cashReciept)
    {
        $cash_reciept = $cashReciept->update($request->all());
        return redirect()->route('cash-reciept.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashReciept  $cashReciept
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cashReciept = CashReciept::find($id);

        $cashReciept->delete();
        return redirect()->route('cash-reciept.index');
    }
}
