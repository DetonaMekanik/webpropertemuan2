<?php
namespace App\Http\Controller;

use Illuminate\Http\request;

class temanController extends Controller
{
    public function index(){
        $dt = [
            [
                'idteman'=>1,
                'namateman'=>'Ambadre',
                'alamat'=>'Jl. ngawi No.Suki7',
                'kota'=>'Muani',
                'telp'=>'0101010101',

            ],
            [
               'idteman'=>1,
                'namateman'=>'Dimaz Keseimbangan',
                'alamat'=>'Jl. Ujung kapal karam ',
                'kota'=>'Ngawi',
                'telp'=>'010101010001', 
            ],
        ];
        return view ('teman',compact('dt'));
    }
}