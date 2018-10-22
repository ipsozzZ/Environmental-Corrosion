<?php
namespace app\mobile\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this -> fetch('public/header');
    }
}