<?php
class CourseModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('CName','require','课程名字必须'),
		//array('CRId','require','地点必须'),
		//array('TId','require','教师名字必须'),
        );
    // 定义自动完成
    protected $_auto    =   array(
		//array('TId','getTeacherId',3,'callback'),
        );
 	public function getTeacherId($name){
		$Teacher = M('Teacher');
		$condition['Tname'] = $name;
		$TId = $Teacher->where($condition)->getField('TId');
		return $TId;
	}
 }
