<?php

namespace App\Http\Controllers;

use App\Expatriates;
use Illuminate\Http\Request;

class ExpatriatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expatriates =Expatriates::all();
        if (request()->ajax()) {

            return datatables()->of($expatriates)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('expatriate.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('expatriate.destroy' ,$row->id).'">Delete</a>
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
        return view('admin.expatriate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.expatriate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expatriate = Expatriates::create($request->all());

        return redirect()->route('expatriate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expatriates  $expatriates
     * @return \Illuminate\Http\Response
     */
    public function show(Expatriates $expatriates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expatriates  $expatriates
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $expatriate =Expatriates::find($id);

        return view('admin.expatriate.edit' , compact('expatriate'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expatriates  $expatriates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $expatriates = Expatriates::find($id);
        $expatriates = $expatriates->update($request->all());

        return redirect()->route('expatriate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expatriates  $expatriates
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expatriates = Expatriates::find($id);

        $expatriates->delete();

        return redirect()->route('expatriate.index');
    }
}
