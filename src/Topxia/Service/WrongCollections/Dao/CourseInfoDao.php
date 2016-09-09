<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/5
 * Time: 20:12
 */
namespace Topxia\Service\WrongCollections\Dao;

interface CourseInfoDao{

    public function findUserCourseId($user_id);

    public function getCourseTitle($course_id);

    public function getCourseInfo($user_id);
}