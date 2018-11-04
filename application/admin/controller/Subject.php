<?php

namespace app\admin\controller;

use think\Controller;

class Subject extends Common
{
    public function _initialize(){
        parent::_initialize();
        $this -> assign("pageTitle", "课程管理");
    }

    public function index(){
        $Subjects =  db('subject') -> alias('a')
                  -> join('lesson b','a.id = b.sid')
                  -> field("a.*,b.name as sname, b.id as lid")
                  -> select();

        $this     -> assign("Subjects", $Subjects);
        return    view();
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