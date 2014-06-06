<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		session('[start]');
		$flag = 0;
		if(session('?Uid')){
			$flag = 1;
		}
		$this->assign('flag',$flag);
        $this->display();
    }
 }
