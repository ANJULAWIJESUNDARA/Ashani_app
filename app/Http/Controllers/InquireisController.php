<?php

namespace App\Http\Controllers;

use App\Inquireis;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquireisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquireis =Inquireis::all();
        if (request()->ajax()) {

            return datatables()->of($inquireis)
                ->addColumn('action', function ($row) {
                        $html ='';
                        $html .='<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                        <ul class="dropdown-menu">

                          <li><a class="dropdown-item" href="'.route('inquireis.destroy' ,$row->id).'">Delete</a>
                          </li>';
                    if($row->is_responded == 'no'){
                        $html .='<li><a class="dropdown-item" href="'.route('inquireis.respond' ,$row->id).'">Make Respond</a>
                        </li>';
                    }else{
                        $html .='<li><a class="dropdown-item">Already Responded</a>
                        </li>';
                    }


                       $html .= '</ul>
' ;

                    return $html;
                })

                ->removeColumn('created_at')
                ->removeColumn('updated_at')
                ->removeColumn('deleted_at')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.inquireis.index');
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
       $inquiry =Inquireis::create($request->all());

       return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquireis  $inquireis
     * @return \Illuminate\Http\Response
     */
    public function show(Inquireis $inquireis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquireis  $inquireis
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquireis $inquireis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquireis  $inquireis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquireis $inquireis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquireis  $inquireis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquireis = Inquireis::find($id);
        $inquireis->delete();
        return redirect()->route('inquiries.index');

    }

    public function respond($id)
    {
        $inquirei = Inquireis::find($id);
        $inquirei->is_responded = 'yes';
        $inquirei->update();
        $user = Auth::user();
        $details = [
            'title' => 'Respond For Your Request Inquire',
            'inquire_name' => $inquirei->name ,
            'date' => Carbon::parse($inquirei->created_at)->format("Y-m-d"),
            'gn_name' => $user->name ,
        ];

        \Mail::to($inquirei->email)->send(new \App\Mail\MyTestMail($details));

        return redirect()->route('inquiries.index');
    }
}
