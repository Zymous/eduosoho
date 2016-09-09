<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/2
 * Time: 15:46
 */
namespace Topxia\Service\WrongCollections\Dao;

interface WrongCollectionsDao {

    public function getWrongCollections($user_id);

    public function getWrongCollectionsId($user_id);

    public function getWrongCollectionsCount($user_id);

    public function getAllUserDone($user_id);
}