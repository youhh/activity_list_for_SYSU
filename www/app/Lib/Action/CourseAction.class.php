<?php
class CourseAction extends Action{
    public function insert(){
		$Course = M('Course');
		$Give = M('Give');
		$course['Cname'] = $_POST['Cname'];
		$course['CRname'] = $_POST['CRname'];
		$course['Major'] = $_POST['Major'];
		$course['Grade'] = $_POST['Grade'];
		$course['Academy'] = $_POST['Academy'];
		$course['Ctime'] = $_POST['Ctime'];
		$course['Cnum'] = $_POST['Cnum'];
		$course['Cdate'] = $_POST['Cdate'];
		$lastid = $Course->add($course);
		if($lastid){
			$name = $_POST['Tname'];
			$Teacher = M('Teacher');
			$condition['Tname'] = $name;
			$tid = $Teacher->where($condition)->getField("Tid");
			$give['Tid'] = $tid;
			$give['Cid'] = $lastid;
			$result = $Give->add($give);
			if($result){
				$this->success('success！');
			}
			else{
				$this->error('error2');
			}
		}
		else{
			$this->error('error1！');
		}
    }
 }

?>