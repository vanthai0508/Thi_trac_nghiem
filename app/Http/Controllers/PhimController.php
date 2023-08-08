<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PhimController extends Controller
{

    

    public function __construct(protected Phim $phim
    )
    {
        
    }
    public function list()
    {

        dd(Auth::user()->toArray());
        $phims = Phim::get();
        return view("home")->with('phims', $phims);
    }

    // public function create(Request $request)
    // {
    //     Phim::create($request->all());
    //     return redirect('listPhim');
    // }

    // public function viewCreatePhim()
    // {
    //     return view('createPhim');
    // }

    // public function update($id, Request $request)
    // {
    //     Phim::find($id)->update($request->all());
    //     return redirect('listPhim');
    // }

    // public function find($id)
    // {
    //     $phim = Phim::where('id', $id)->first();
    //     return view('updatePhim')->with('phim', $phim);
    // }

    // public function delete($id)
    // {
    //     Phim::where('id', $id)->delete();
    //     return redirect('listPhim');
    // }
}