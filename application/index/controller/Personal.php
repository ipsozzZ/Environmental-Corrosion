<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Common;
use app\common\model\User;
use app\common\model\Token;
use app\common\controller\Dcate;
use app\common\model\Ucollect;
use app\common\model\Udownload;
use app\common\model\Msg;

class Personal extends Common
{
  public function _initialize()
  {
    parent::_initialize();
  }

  /**
   * 个人信息
   */
  public function index()
  {
    $this->assign('currTitle', '个人信息');
    $userModel = new User();
    $token = cookie('corrosion_token');
    if (!$token) $this->redirect('login/index');
    $userInfo = $userModel->getUserByToken($token);
    if (!$userInfo) $this->redirect('login/index');
    $this->assign('user', $userInfo);
    return view();
  }

  /**
   * 个人收藏 
   */
  public function collection()
  {
    /* 获取用户id */
    $userModel = new User();
    $token = cookie('corrosion_token');
    if (!$token) $this->redirect('login/index');
    $userInfo = json_decode($userModel->getUserByToken($token));
    if (!$userInfo) $this->redirect('login/index');
    $uid = $userInfo->id;

    $modelUCollect = new Ucollect();
    $UCollect = $modelUCollect->getCAll($uid);
    $this->assign([
      'currTitle' => '个人信息',
      'UCollect' => $UCollect,
    ]);
    return view();
  }

  /**
   * 用户收藏 室内/室外
   * @return json
   */
  public function addCollect()
  {
    if (request()->isAjax()) {
      $data = input('post.');

      /* 通过session取得uid */
      $userModel = new User();
      $token = cookie('corrosion_token');
      if (!$token) return json(2);
      $userInfo = $userModel->getUserByToken($token);
      if (!$userInfo) return json(2);
      $uid = $userInfo->id;

      /* 通过data id取得data */
      $id = $data['id'];
      $modelDacte = new Dcate();
      $Data = json_decode($modelDacte->getDataById($id));

      if ($data['type'] == 'indoor') {
        $type = 1;
      } else {
        $type = 2;
      }

       /* 新增用户收藏 */
      $collectData = [
        'uid' => $uid,
        'did' => $id,
        'type' => $type,
      ];
      $modelUCollect = new Ucollect();
      $isExit = json_decode($modelUCollect->getOneByDid($id, $type));
      if ($isExit) {
        return json(0);
      }

      $res = json_decode($modelUCollect->add($collectData));

      /* 对应数据收藏量加一 */
      $Data->collect += 1;
      $updateData = json_decode($modelDacte->updateDataById($id, $Data));

      return json(1);
    }
  }

  /**
   * 个人下载
   */
  public function download()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }

  public function myDownload()
  {
    if (request()->isAjax()) {
      $data = input('post.');

      /* 通过session取得uid */
      $userModel = new User();
      $token = cookie('corrosion_token');
      if (!$token) return json(2);
      $userInfo = $userModel->getUserByToken($token);
      if (!$userInfo) return json(2);

      $DataId = $data['id'];
      $uLoadModel = new Udownload();
      $isExist = json_decode($uLoadModel->getByDid($DataId));
      if ($isExist) {
        return json(0);
      }
      return json(1);
    }
  }

  /**
   * 消息中心
   */
  public function news()
  {
    $this->assign('currTitle', '个人信息');
    return view();
  }

  /**
   * 重置密码
   */
  public function resetPwd()
  {
    if (request()->isPost()) {
      $data = input('post.');

      /* 判断用户是否登录 */
      $userModel = new User();
      $token = cookie('corrosion_token');
      if (!$token) $this->redirect('login/index');
      $userInfo = json_decode($userModel->getUserByToken($token));
      if (!$userInfo) $this->redirect('login/index');
      $UserId = $userInfo->id;

      /* 判断用户手机是否正确 */
      if ($userInfo->phone != $data['phone']) {
        $this->assign('hint', '手机号码错误或不存在！');
        return view('resetPwd');
      }

      /* 验证码是否正确 */
      $msgModel = new Msg();
      if (!$msgModel->checkCode($data['phone'], $data['msg'])) {
        $this->assign('hint', '手机验证码错误！');
        return view('resetPwd');
      }
      
      /* 将新密码写入数据库 */
      $newPass = json_decode($userModel->updatePassById($UserId, md5($data['pass'])));
      if (!$newPass) {
        $this->assign('hint', '重置密码失败');
        return view('resetPwd');
      }
      $this->redirect('index/login/index');
    }
    $this->assign([
      'hint' => '',
    ]);
    return view('resetPwd');
  }
}