<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/5
 * Time: 20:15
 */
namespace Topxia\Service\WrongCollections\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\WrongCollections\Dao\CourseInfoDao;

class CourseInfoDaoImpl extends BaseDao implements CourseInfoDao{
    protected  $table_cll = 'course_lesson_learn';
    protected  $table_c   = 'course';
    private $serializeFields = array(
        'answer' => 'json'
    );

    public function findUserCourseId($user_id)
    {
        // TODO: Implement findUserCourseId() method.
        $sql = "SELECT DISTINCT courseId FROM {$this->table_cll} WHERE userId = ? ";
        $ids = $this->getConnection()->fetchAll($sql,array($user_id));
        return $ids ? $this->createSerializer()->unserialize($ids,$this->serializeFields) : null;
    }

    public function getCourseTitle($course_id)
    {
        // TODO: Implement getCourseTitle() method.
        $sql = "SELECT title FROM {$this->table_c} WHERE id = ? ";
        $title = $this->getConnection()->fetchAll($sql,array($course_id));
        return $title ? $this->createSerializer()->unserialize($title,$this->serializeFields) : null;
    }

    public function getCourseInfo($user_id)
    {
        // TODO: Implement getCourseInfo() method.
        $sql = "SELECT DISTINCT courseId FROM {$this->table_cll} WHERE userId = ? ";
        $ids = $this->getConnection()->fetchAll($sql,array($user_id));
        foreach($ids as $k => $v) {
            $sql1 = "SELECT id, title FROM {$this->table_c} WHERE id = ? ";
            $info[] = $this->getConnection()->fetchAll($sql1,array($v['courseId']));
        }
        return $info ? $this->createSerializer()->unserialize($info,$this->serializeFields) : null;
    }


}
