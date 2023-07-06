<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Request;

class ProductController extends Controller{
    public function index(){
        $p=ProductModel::all();
        return $this->view("list",['products'=>$p]);
    }
    //add
    public function store(){
        $ct = CategoryModel::all();
        return $this->view('add',["categories"=>$ct]);
    }
    public function create(Request $request){
        $data=$request->getBody();
        $image=$_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$image);
        $data["image"]=$image;
        $p=new ProductModel();
        $p->insert($data);
        header("location:/");
        exit;
    }
    //delete 
    public function delete(Request $request){
        $id= $request->getBody()['id'];
        $p= new ProductModel();
        $p->delete($id);
        header("location:/");
        exit;
    }
    // update
    public function show(Request $request){
        $id =$request->getBody()["id"];
        $p=ProductModel::findOne($id);
        $ct=CategoryModel::all();
        return $this->view("update",[
            "products"=>$p,
            "categories"=>$ct
        ]);
    }
    public function update(Request $request){
        $data = $request->getBody();
        if($_FILES["image"]["size"]>0){
            $data["image"]=$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$data["image"]);
        }
        $p=new ProductModel();
        $p->update($data['id'],$data);
        header("location:/");
        exit;
    }
}