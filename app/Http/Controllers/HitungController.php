<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\Nilai;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function index(){
        $title ='Perhitungan';
        $kriterias = [];
        foreach(Kriteria::all() as $kriteria)
            $kriterias[$kriteria->id_kriteria]=$kriteria;
        $alternatifs = [];
        foreach(Alternatif::all() as $alternatif)
            $alternatifs[$alternatif->id_alternatif]=$kriteria;
        $nilais = [];
        foreach(Nilai::orderBy('id_alternatif')->orderBy('id_kriteria')->get() as $nilai)
            $nilais[$nilai->id_alternatif][$nilai->id_kriteria]=$nilai->nilai;

        $arr = [];
        foreach($nilais as $key => $value){
            foreach($value as $k => $v){
                $arr[$k][$key] = $v;
            }
        }
        $minmax = [];
        foreach($arr as $key => $value){
            $minmax[$key]['min'] = min($value);
            $minmax[$key]['max'] = max($value);
        }
        $normalisasi = [];
        foreach($nilais as $key => $value){
            foreach($value as $k => $v){
                $normalisasi[$key][$k] = $kriterias[$k]->atribut=='benefit' ? $v/$minmax[$k]['max']: $minmax[$k]['min']/$v;
            }
        
        }
        $terbobot = [];
        foreach($normalisasi as $key => $value){
            foreach($value as $k => $v){
                $terbobot[$key][$k] = $v * $kriterias[$k]->bobot;
            }
        
        }
        $total = [];
        foreach($terbobot as $key => $value){
            $total[$key] = array_sum($value);

        }
        arsort($total);
        $rank = [];
        $no = 1;
        foreach($total as $key => $value){
            $rank[$key] = $no++;
        }
        ksort($total);

        $categories =[];
        $data =[];
        foreach($total as $key => $value){
            $categories[]= $alternatifs[$key]->nama_alternatif;
            $data[]=$value;
        }
        
        return view('hitung.index',compact('kriterias','alternatifs','nilais','title','minmax','normalisasi','terbobot','total','rank','categories','data'));
    }
}
