<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/5
 * Time: 20:15
 */
namespace Topxia\Service\WrongCollections\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\WrongCollections\Dao\QuestionsDao;

class QuestionsDaoImpl extends BaseDao implements QuestionsDao{
    protected  $table = 'question';
    private $serializeFields = array(
        'answer' => 'json'
    );

    public function getQuestions($ids)
    {
        // TODO: Implement getQuestions() method.
        if (empty($ids)) {
            return array();
        }
        $marks = str_repeat('?,', count($ids) - 1).'?';
        $sql     = "SELECT * FROM {$this->table} WHERE id IN ({$marks}) ";
        $result  = $this->getConnection()->fetchAll($sql,$ids);
        return $result ? $this->createSerializer()->unserialize($result,$this->serializeFields) : null;

    }
}
