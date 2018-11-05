<?php
namespace app\index\controller;

use app\index\controller\Common;
use app\index\model\Carousel as ModelBanner;
use think\Controller;

class Index extends Common
{
    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 前台首页
     */
    public function index()
    {
        /* 获取轮播图 */
        $modelBanner = new ModelBanner();
        $banner = $modelBanner->getBanner();
        $this->assign([
            "currTitle" => '首页',
            'banner' => $banner,
        ]);
        return view();
    }

    /**
     * 显示详情
     */
    public function show()
    {
        $this->assign('currTitle', '详情');
        return view();
    }
}
