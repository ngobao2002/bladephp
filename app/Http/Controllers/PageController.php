<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        // return view('page.trangchu');
        // return view('page.trangchu',compact('slide'));
        $new_product = Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);
        //dd($new_product);
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp($type){
        $type_product = Product_type::all();

        $sp_theoloai = Product::where('id_type', $type)->get();

        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);

        $loai_sp = Product_type::where('id', $type)->first();

        return view('page.loai_sanpham', compact('type_product', 'sp_theoloai', 'sp_khac', 'loai_sp'));
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
