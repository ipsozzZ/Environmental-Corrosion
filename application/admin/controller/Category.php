<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "栏目");
    }

    public function index(){
        $Cate = db('cate') -> select();
        $this -> assign('category', $Cate);
        return view();
    }

    public function add ($sid = '', $name = '') {
        if($sid != '' && $name != '') {
            $data = [
                'sid' => $sid,
                'name' => $name
            ];
            db('lesson') -> insert($data);

            return $this -> redirect("/admin/subject");
        }

        $Subjects = db('subject') -> select();
        $this     -> assign("Subjects", $Subjects);

        return view();
    }

    public function edit ($lid = 1, $sid = '', $name = '') {
        if($sid != '' && $name != '') {
            $data = [
                'sid' => $sid,
                'name' => $name
            ];
            db('lesson') -> where('id', $lid) -> update($data);
            return $this -> redirect("/admin/subject");
        }
        $lesson = db('lesson') -> where("id", $lid) -> find();

        $Subjects = db('subject') -> select();
        $this     -> assign("Subjects", $Subjects);
        $this -> assign('lesson', $lesson);
        return view();
    }
}