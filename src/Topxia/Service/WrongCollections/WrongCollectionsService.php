<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/2
 * Time: 15:06
 */
namespace Topxia\Service\WrongCollections;

interface WrongCollectionsService {

    //获取错题
    public function getWrongCollections($user_id);
    //获取用户的所有错题id
    public function getWrongCollectionsId($user_id);
    //获取用户错题数
    public function getWrongCollectionsCount($user_id);
    //获取错题id对应的题目信息
    public function getQuestions($ids);
    //获取单个学生所有做题数
    public function getAllUserDone($user_id);
    //获取单个学生所参加的课程id
    public function findUserCourseId($user_id);
    //获取课程对应的名称
    public function getCourseTitle($course_id);
//    //获取课程各章的id
//    public function findCourseChapter($course_id);
//    //获取课程各节的id
//    public function findCoursePart($chapter_id);
    //获取学生所参加课程的id与名称
    public function getCourseInfo($user_id);




}

