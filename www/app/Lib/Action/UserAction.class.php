<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function UserSignUp(){
		$Data = M('User');
		if($this->_post('Uname') == NULL){
			$this->error("用户名不能为空");
			return;
		}
		if($this->_post('Upwd') == NULL){
			$this->error("密码不能为空");
			return;
		}
		if($this->_post('Academy') == NULL){
			$this->error("学院不能为空");
			return;
		}
		if($this->_post('Grade') == NULL){
			$this->error("年级不能为空");
			return;
		}
		if($this->_post('Major') == NULL){
			$this->error("专业不能为空");
			return;
		}
		$data['Uname'] = $this->_post('Uname');
		$result = $Data->where($data)->select();
		if(result!=NULL){
			$data['Upwd'] = md5($this->_post('Upwd'));
			$data['Grade'] = $this->_post('Grade');
			$data['Academy'] = $this->_post('Academy');
			$data['Major'] = $this->_post('Major');
			$lastid = $Data->add($data);
			if($lastid){
				session('Uid',$lastid);
				$this->success('注册成功','/www/app/index.php/Index/index');
			}
			else{
				$this->error("注册失败");
			}
		}
		else{
			$this->error("用户名已存在");
		}
    }
	public function UserLogin(){
		$Data = M('User');
		if($this->_post('Uname') == NULL){
			$this->error("用户名不能为空");
			return;
		}
		if($this->_post('Upwd') == NULL){
			$this->error("密码不能为空");
			return;
		}
		$data['Uname'] = $this->_post('Uname');
		$result = $Data->where($data)->select();
		if($result){
			if($result[0]['Upwd'] == md5($this->_post('Upwd'))){
				session('Uid',$result[0]['Uid']);
				$this->success('登陆成功','/www/app/index.php/Index/index');
			}
			else{
				$this->error('用户名与密码不匹配');
			}
		}
		else{
			$this->error("用户不存在");
		}
	}
	
	public function schedule(){
		$Data = M('User');
		$UserCondition['Uid'] = session('Uid');
		$User = $Data->where($UserCondition)->select();
		$Course = M('Course');
		$CourseCondition['Academy'] = $User[0]['Academy'];
		$CourseCondition['Major'] = $User[0]['Major'];
		$CourseCondition['Grade'] = $User[0]['Grade'];
		$course = $Course->where($CourseCondition)->select();
		$data;
		for($i = 0;$i < 15;$i++){
			for($j = 0;$j < 9;$j++){
				$data[$i][$j] = "";
			}
		}
		foreach($course as $item){
			for($i = 0;$i < $item['Cnum'];$i++){
				$data[$item['Ctime']-1+$i][$item['Cdate']+1] = $item['Cname'];
			}
		}
		$this->assign('data',$data);
		$this->display();
	}
	public function UserLogout(){
		session('[destroy]');
		$this->success('退出成功','/www/app/index.php/Index/index');
	}
 }
