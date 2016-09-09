<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/2
 * Time: 15:49
 */
namespace Topxia\Service\WrongCollections\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\WrongCollections\Dao\WrongCollectionsDao;

class WrongCollectionsDaoImpl extends BaseDao implements WrongCollectionsDao {
    protected  $table = 'testpaper_item_result';
    private $serializeFields = array(
        'answer' => 'json'
    );

    public function getWrongCollections($user_id)
    {
        // TODO: Implement getWrongCollections() method.
//        $sql     = "SELECT id FROM {$this->table1} WHERE userId = ? AND status = 'wrong'";
//        $wrongCollections = $this->getConnection()->fetchAll($sql,array($user_id));
//        $sql1    = "SELECT * FROM {$this->table2} WHERE id = ? LIMIT 1";
//        foreach ($wrongCollections as $k => $v) {
//            $this->getConnection()->fetchAll($sql1,array($v["id"]));
//    }
//        return $wrongCollections ? $this->createSerializer()->unserialize($wrongCollections,$this->serializeFields) : null;
    }

    public function getWrongCollectionsId($user_id)
    {
        // TODO: Implement getWrongCollectionsId() method.
        $sql     = "SELECT questionId FROM {$this->table} WHERE userId = ? AND status = 'wrong'";
        $ids     = $this->getConnection()->fetchAll($sql,array($user_id));
        return $ids ? $this->createSerializer()->unserialize($ids,$this->serializeFields) : null;
    }

    public function getWrongCollectionsCount($user_id)
    {
        // TODO: Implement getWrongCollectionsCount() method.
        $sql     = "SELECT count(id) FROM {$this->table} WHERE userId = ? AND status in ('wrong')";
        $count   = $this->getConnection()->fetchColumn($sql,array($user_id));
        return $count ? $count : null;
    }

    public function getAllUserDone($user_id)
    {
        // TODO: Implement getAllUserDone() method.
        $sql    = "SELECT count(id) FROM {$this->table} WHERE userId = ?";
        $count  = $this->getConnection()->fetchColumn($sql,array($user_id));
        return $count ? $count : null;
    }
}