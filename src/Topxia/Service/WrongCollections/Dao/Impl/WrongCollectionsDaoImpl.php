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

class WrongCollectionsImpl extends BaseDao implements WrongCollectionsDao {

    protected  $table1 = 'testpaper_item_result';

    private $serializeFields = array(
        'answer' => 'json'
    );

    public function getWrongCollections($user_id)
    {
        // TODO: Implement getWrongCollections() method.
        $sql     = "SELECT * FROM {$this->table} WHERE userId = ? AND status = 'wrong'";
        $wrongCollections = $this->getConnection()->fetchall($sql,array($user_id));
        return $wrongCollections? $this->createSerializer()->unserialize($wrongCollections,$this->serializeFilds): null;
    }
}