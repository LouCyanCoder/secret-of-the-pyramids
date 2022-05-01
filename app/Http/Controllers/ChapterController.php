<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ChapterController extends Controller
{
    public function index($id=1)
    {
        $chapter = DB::table('chapter')->where('id',$id)->first();
        $choices = DB::table('choice')->where('chapter_id',$id)->get();
        $illustration = DB::table('illustration')->where('chapter_id',$id)->first();

        return view('layouts.chapter', compact('chapter','choices','illustration'));
    }

    public function show($id)
    {
        $chapter = DB::table('chapter')->where('id',$id)->first();
        $choices = DB::table('choice')->where('chapter_id',$id)->orderBy('order')->get();
        $illustration = DB::table('illustration')->where('chapter_id',$id)->first();
        

        return view('layouts.chapter',compact('chapter','choices','illustration'));
    }
}
