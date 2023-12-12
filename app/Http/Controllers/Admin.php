<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin as AdminModel;
class Admin extends Controller
{
    public function index(){
        $data =[];
        $data['title'] = "ADMIN";
        $data ['img'] ="";
        $data['template'] = "Admin/sidebar";
        return view('Admin', $data);
    }
    public function news(){
        $data =[];
        $data['title'] = "NEW";
        $data['Admin']=AdminModel::get()->toArray();
       
        $data['template'] = "Admin/news";
        return view('Admin', $data);
    }
    public function add (){
        $data =[];
        $data['title'] = "THÊM SẢN PHẨM";
        $data['template'] = "Admin/add";
        return view('Admin', $data);
    }
}