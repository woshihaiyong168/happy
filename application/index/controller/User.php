<?php
namespace app\index\controller;
use think\Controller;
// use app\index\model\user as user;  //引入空间类文件，并且取别名，因为当前类名也是Link
class User
{
	public function index()
	{
		return view('user');
	}
}