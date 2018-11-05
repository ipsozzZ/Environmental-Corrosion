<?php
namespace app\index\controller;

<<<<<<< HEAD
use app\index\controller\Common;
use app\index\model\Carousel as ModelBanner;
use think\Controller;

class Index extends Common
{
    public function _initialize()
    {
=======
use think\Controller;
use app\index\controller\Common;

class Index extends Common
{
    public function _initialize(){
>>>>>>> 74284d2f53aad22fc784289ae4d75f3a5f007785
        parent::_initialize();
    }

    /**
     * 前台首页
     */
    public function index()
    {
<<<<<<< HEAD
        $modelBanner = new ModelBanner();
        $banner = $modelBanner->getBanner();
        $this->assign([
            "currTitle" => '首页',
            'banner' => $banner,
        ]);
=======
        $this -> assign("currTitle", '首页');
>>>>>>> 74284d2f53aad22fc784289ae4d75f3a5f007785
        return view();
    }

    /**
     * 显示详情
     */
<<<<<<< HEAD
    public function show()
    {
        $this->assign('currTitle', '详情');
=======
    public function show(){
        $this -> assign('currTitle','详情');
>>>>>>> 74284d2f53aad22fc784289ae4d75f3a5f007785
        return view();
    }
}
