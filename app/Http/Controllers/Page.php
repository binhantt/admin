<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin as AdminModel;
class Page  extends Controller
{
    public function index(){
        $data =[];
        $data['title'] = "Shop";
        $data ['img'] ="";
        $data['template'] = "Page/index";
        return view('Page', $data);
    }
    public function order(){
        $data =[];
        $data['title'] = "SHOP/ORDER";
        $data ['img'] ="";
        $data['Admin']=AdminModel::get()->toArray();
        $data['template'] = "Page/order";
        return view('Page', $data);
    }
    public function commodity(){
        $data =[];
        $data['title'] = "SHOP";
        $data ['img'] ="";
        $data['Admin']=AdminModel::get()->toArray();
        $data['template'] = "Page/commodity";
        return view('Page', $data);
    }
}