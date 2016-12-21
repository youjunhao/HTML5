<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // $categoryModel = M("categorys");
       // $categorys = $categoryModel->select();
       // var_dump($categorys);exit;
       $this->display();
    }
}