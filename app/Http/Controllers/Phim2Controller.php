<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;


class Phim2Controller extends Controller
{
    // public function showTen()
    // {
    //    $ketqua = $this->tinhTong(3, 4);
    //    dd($ketqua + 7);
    // }

    // public function tinhTong(int $a, int $b)
    // {
    //     return $a + $b;
    // }
    public function listPhim()
    {
        //object doi tuong
        // $ten = ["thu", "lan", "hue" ];
        // dd($ten);
        // foreach($ten as $key => $test){
        //     if($key == 2)
        //     dd($test);
        // }
        // $ten = "fhdssfj";
        
        // $arrayTen = ["ten1" => "fhdsjfs", "ten2" => 4, "ten3" => "fhdssfj"];
            $listPhim = Phim::get();
            dd($listPhim);
            
            return view('welcome')->with('list', $listPhim);
            // dd($listUser);
        
        
        // dd($this->timKey($arrayTen, $ten));
        // foreach($lists as $list)
        // {
            
        // }
        // return view('home')->with('lists', $list);
        
    }
    
    public function getTen()
    {
        $data = Phim::get();
        // dd($data->toArray());
        // dd(123);
       return view('test')->with('thai', $data);
    }
    
    public function createPhim(Request $phim)
    {
        Phim::create($phim->all());
        return redirect('day1');
        // $data = Phim::get();
        // return view('test')->with('thai', $data);
        // $this->getTen();
    }

    public function returnCreate()
    {
        return view('create');
    }

    public function returnUpdate(int $id)
    {
        $data = Phim::where('id', $id)->first();
        return view('update')->with('phim', $data);
    }

    public function update(int $id, Request $request) 
    {
        $data = $request->only([
            'ten_phim',
            'gia_tien'
        ]);
        
        Phim::where('id', $id)->update($data);
        $data = Phim::get();
        return view('test')->with('thai', $data);
    }

    public function delete(int $id) 
    {
        Phim::where('id', $id)->delete();

        $data = Phim::get();
        return view('test')->with('thai', $data);
    }
}