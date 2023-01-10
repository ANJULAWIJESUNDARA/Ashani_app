<?php

namespace App\Http\Controllers;

use App\FormerGN;
use Illuminate\Http\Request;

class FormerGNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $former =FormerGN::all();
        if (request()->ajax()) {

            return datatables()->of($former)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('former-gn.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('former-gn.destroy' ,$row->id).'">Delete</a>
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
        return view('admin.grama-niladaries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.grama-niladaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $former = FormerGN::create($request->all());

        return redirect()->route('former-gn.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormerGN  $formerGN
     * @return \Illuminate\Http\Response
     */
    public function show(FormerGN $formerGN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormerGN  $formerGN
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $former = FormerGN::find($id);

        return view('admin.grama-niladaries.edit' , compact('former'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormerGN  $formerGN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormerGN $formerGN)
    {
        $former = $formerGN->update($request->all());
        return redirect()->route('former-gn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormerGN  $formerGN
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $former = FormerGN::find($id);
        $former->delete();

        return redirect()->route('former-gn.index');
    }
}
