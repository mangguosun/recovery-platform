<?php
// +----------------------------------------------------------------------
// | QinfoCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.qinfo360.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <register@qinfo360.com> <http://www.qinfo360.com>
// +----------------------------------------------------------------------

namespace app\common\controller;

class Api {

	protected $data;

	public function __construct() {
		$this->data = array('code' => 0, 'msg' => '', 'time' => time(), 'data' => '');
	}
}