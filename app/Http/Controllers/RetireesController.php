<?php

namespace App\Http\Controllers;

use App\Retirees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RetireesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user =Auth::user();

        // if($user->user_type != "admin")
        // {

        //     return redirect()->back();
        // }


        $retirees =Retirees::all();
        if (request()->ajax()) {

            return datatables()->of($retirees)
                ->addColumn('action', function ($row) {
                        $html ='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="'.route('retirees.edit' ,$row->id).'">Edit</a>
                          </li>
                          <li><a class="dropdown-item" href="'.route('retirees.destroy' ,$row->id).'">Delete</a>
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
        return view('admin.retirees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.retirees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $retirees = Retirees::create($request->all());

        return redirect()->route('retirees.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Retirees  $retirees
     * @return \Illuminate\Http\Response
     */
    public function show(Retirees $retirees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retirees  $retirees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Retirees::find($id);
        return view('admin.retirees.edit' ,compact('info'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Retirees  $retirees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($retirees);
        $retirees = Retirees::find($id);
        $info = $retirees->update($request->all());
        return redirect()->route('retirees.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retirees  $retirees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Retirees::find($id);
        $info->delete();
        return redirect()->route('retirees.index');
    }
}
