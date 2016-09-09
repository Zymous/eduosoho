<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/2
 * Time: 15:13
 */
namespace Topxia\Service\WrongCollections\Impl;

use Topxia\Service\Common\BaseService;
use Topxia\Service\WrongCollections\WrongCollectionsService;

class WrongCollectionsServiceImpl extends BaseService implements WrongCollectionsService
{
    public function getWrongCollections($user_id)
    {
        // TODO: Implement getWrongCollections() method.
        return $this->getWrongCollectionsDao()->getWrongCollections($user_id);
    }

    public function getWrongCollectionsId($user_id)
    {
        // TODO: Implement getWrongCollectionsId() method.
        return $this->getWrongCollectionsDao()->getWrongCollectionsId($user_id);
    }

    public function getWrongCollectionsCount($user_id)
    {
        // TODO: Implement getWrongCollectionsCount() method.
        return $this->getWrongCollectionsDao()->getWrongCollectionsCount($user_id);
    }

    public function getQuestions($ids)
    {
        // TODO: Implement getQuesetions() method.
        return $this->getQuestionsDao()->getQuestions($ids);
    }

    public function getAllUserDone($user_id)
    {
        // TODO: Implement getAllUserDone() method.
        return $this->getWrongCollectionsDao()->getAllUserDone($user_id);
    }

    public function findUserCourseId($user_id)
    {
        // TODO: Implement findUserCourseId() method.
        return $this->getCourseInfoDao()->findUserCourseId($user_id);
    }

    public function getCourseTitle($course_id)
    {
        // TODO: Implement getCourseTitle() method.
        return $this->getCourseInfoDao()->getCourseTitle($course_id);
    }

    public function getCourseInfo($user_id)
    {
        // TODO: Implement getCourseInfo() method.
        return $this->getCourseInfoDao()->getCourseInfo($user_id);
    }

    protected function getWrongCollectionsDao()
    {
        return $this->createDao('WrongCollections.WrongCollectionsDao');
    }

    protected function getQuestionsDao()
    {
        return $this->createDao('WrongCollections.QuestionsDao');
    }

    protected function getCourseInfoDao()
    {
        return $this->createDao('WrongCollections.CourseInfoDao');
    }
}