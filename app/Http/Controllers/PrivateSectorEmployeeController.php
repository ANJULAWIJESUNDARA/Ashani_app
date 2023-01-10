<?php

namespace App\Http\Controllers;

use App\PrivateSectorEmployee;
use App\Retirees;
use Illuminate\Http\Request;

class PrivateSectorEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $retirees =PrivateSectorEmployee::all();
        if (request()->ajax()) {

            return datatables()->of($retirees)
                ->addColumn('action', function ($row) {
                    $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('private-sector.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('admin.private-sector.delete' ,$row->id).'">Delete</a>
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
        return view('admin.private-sector.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.private-sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $private_sector_employee = PrivateSectorEmployee::create($request->all());
        return redirect()->route('private-sector.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrivateSectorEmployee  $privateSectorEmployee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrivateSectorEmployee  $privateSectorEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $private_sector_employee = PrivateSectorEmployee::find($id);

        return view('admin.private-sector.edit' , compact('private_sector_employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivateSectorEmployee  $privateSectorEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $private_sector_employee = PrivateSectorEmployee::find($id);
        $private_sector_employee = $private_sector_employee->update($request->all());

        return redirect()->route('private-sector.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivateSectorEmployee  $privateSectorEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $private_sector_employee = PrivateSectorEmployee::find($id);
        if(!empty($private_sector_employee))
        {
            $private_sector_employee->delete();
        }
        return redirect()->route('private-sector.index');
    }
}
