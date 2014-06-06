<?php
class CourseModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('course','require','课程名字必须'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
 }
