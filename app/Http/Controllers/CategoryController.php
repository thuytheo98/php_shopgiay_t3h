<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DateTime;

class CategoryController extends Controller
{
    function getAddCate(){
        return view('admin.category.add_cate');
    }
    function postAddCate(Request $request){
        //lấy dữ liệu:
        $cate= new Category();
        $cate->name=$request->name;
        $cate->order_display=$request->order_display;
        $cate->created_at= new DateTime;
        $cate->save();
        return redirect(route('listdanhmuc'));
    }
    function getListCate(){
        $cates=Category::all();
        //compact chuyền biến cate vào để dùng
        return view('admin.category.list_cate',compact('cates'));
    }


}
