<?php
namespace app\front\controller;
use app\front\model\Product;
class Home extends Controller
{
    public function index(){
        $model = new Product;
        $data = $model->getNewList();
        $this->assign('data',$data);
        return $this->fetch();
    }
}