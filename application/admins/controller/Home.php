<?php
/**
 * Created by PhpStorm.
 * User: MILI
 * Date: 2018/11/26
 * Time: 18:36
 */

namespace app\admins\controller;


class Home extends BaseAdmin
{
    public function index(){
        return $this->fetch();
    }
}