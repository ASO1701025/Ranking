<?php
/**
 * Created by PhpStorm.
 * User: kakeru
 * Date: 2019/06/04
 * Time: 11:20
 */

namespace App\Http\Controllers;


//use Illuminate\Http\Request;

//use http\Env\Request;

class instantrankingController extends Controller
{
    public function top(Request $request){
        $item = InstantRanking::all();
        return view('');
    }

    public function themalist(){
        return view('InstantRanking.themalist');
    }

    public function themapost(){
        return view('InstantRanking.themapost');
    }

    public function user(){

        return view('InstantRanking.user');
    }

    public function shinki(){
        return view('InstantRanking.shinki');
    }

    public function ditail(){
        return view('InstantRanking.ditail');
    }

    public function home(){
        return view('InstantRanking.home');
    }

    public function top1(){
        return view('InstantRanking.top');
    }

}