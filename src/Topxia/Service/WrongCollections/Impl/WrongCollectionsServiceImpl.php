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

class WrongCollectionsServiceImpl extends BaseService implements WrongCollectionsService {
    public function getWrongCollections($user_id)
    {
        // TODO: Implement getWrongCollections() method.
        $wrongCollections = $this->getWrongCollectionsDao()->getWrongCollections($user_id);
        return WrongCollectionsSerialize::unserialize($wrongCollections);
    }
}

class WrongCollectionsSerialize
{
    public static function serialize(array &$wrongCollections)
    {
        return $wrongCollections;
    }


    public static function unserialize(array $wrongCollections = null)
    {
        $wrongCollections['includeImg'] = false;
        if (preg_match('/<img (.*?)>/', $wrongCollections['stem'])) {
            $wrongCollections['includeImg'] = true;
        }
        return $wrongCollections;
    }

    public static function unserializes(array $wrongCollections)
    {
        return array_map(function($wrongCollections) {
            return WrongCollectionsSerialize::unserialize($wrongCollections);
        }, $wrongCollections);
    }
}