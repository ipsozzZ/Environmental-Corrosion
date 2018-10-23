<?php
namespace app\mobile\controller;
use think\Controller;

class Train extends Controller
{
    public function index()
    {
        $this -> assign("pageTitle", "训练营");
        $this -> assign('curPageIndex', 2);
        return view();
    }
}