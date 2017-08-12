<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
	echo __ROOT__."~——~__ROOT__"."<br />";
	
	echo __APP__."~——~__APP_"."<br />";
	echo __URL__."~——~__URL__"."<br />";
	echo __ACTION__."~——~__ACTION__"."<br />";
	echo __SELF__."~——~__SELF__"."<br />";
	echo __CURRENT__."~——~__CURRENT"."<br />";
	echo ACTION_NAME."~——~AECTION_NAME"."<br />";
	echo APP_PATH."~——~APP_PATH"."<br />";
	echo APP_NAME."~——~APP_NAME"."<br />";

	


    }
    public function test(){
    	$msg=M('msg');
    	print_r($msg->select());
    	var_dump($msg->select());
    }
}