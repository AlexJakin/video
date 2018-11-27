<?php
/**
 * Created by PhpStorm.
 * User: MILI
 * Date: 2018/11/26
 * Time: 18:38
 */

namespace app\admins\controller;


use think\Controller;
use think\Request;
use Util\data\Sysdb;

class BaseAdmin extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->_admin = session('admin');
        /**登录验证**/
        if(!$this->_admin){
            header('Location: /admins.php/admins/Account/login');
            exit;
        }
        //判断用户是否有权限
        $this->db = new Sysdb();
    }
}