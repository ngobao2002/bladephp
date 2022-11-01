<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->get();
        return view('page.trangchu', compact('slide','new_product'));
    }

    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }

    public function getChitiet(){
        return view('page.chitiet_sanpham');
    }

    public function getLienhe(){
        return view('page.lienhe');
    }

    public function getAbout(){
        return view('page.about');
    }
}
