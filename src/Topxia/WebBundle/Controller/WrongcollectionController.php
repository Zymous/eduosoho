<?php
/**
 * Created by PhpStorm.
 * User: wu.liao
 * Date: 2016/9/1
 * Time: 16:33
 */
namespace Topxia\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Service\Task\TaskProcessor\TaskProcessorFactory;

class WrongcollectionController extends BaseController {
    public function indexAction(Request $request) {
        $user = $this->getCurrentUser();
        $tmp  = $this->getWrongCollectionsService()->getWrongCollectionsId($user['id']);
        if($tmp) {
            foreach ($tmp as $k => $v) {
                $ids[] = $v['questionId'];
            }
            $res = $this->getWrongCollectionsService()->getQuestions($ids);
            foreach ($res as $k => $v) {
                if ($v["metas"] != "[]") {
                    $res[$k]["metas"] = json_decode($v["metas"], true);
                }
                else if ($v["type"] == "fill") {
                    $res[$k]["answer"] = json_decode($v["answer"], true);
                }
                else if ($v["type"] == "essay") {
                    $res[$k]["answer"] = json_decode($v["answer"]);
                }
                $tmp = str_replace('-','/',$res[$k]["target"]);
                $res[$k]["target"] = str_replace('lesson','learn#lesson',$tmp);
            }

//        $paginator = new Paginator(
//            $request,
//            $this->getWrongCollectionsService()->getWrongCollectionsId($user['id']),
//            10
//        );
//        var_dump($paginator);
//        $wrongcollectionsResults = $this->getTestpaperService()->findTestpaperResultsByUserId(
//            $user['id'],
//            $paginator->getOffsetCount(),
//            $paginator->getPerPageCount()
//        );
//        $testpapersIds     = ArrayToolkit::column($testpaperResults, 'testId');
//        $testpapersTargets = ArrayToolkit::column($testpaperResults, 'target');
//        $testpapers        = $this->getTestpaperService()->findTestpapersByIds($testpapersIds);
//        $testpapers        = ArrayToolkit::index($testpapers, 'id');
//
//        $targets   = ArrayToolkit::column($testpapers, 'target');
//        $courseIds = array_map(function ($target) {
//            $course = explode('/', $target);
//            $course = explode('-', $course[0]);
//            return $course[1];
//        }, $targets);
//        $lessonIds = array_map(function ($target) {
//            $lesson = explode('/', $target);
//            $lesson = explode('-', $lesson[1]);
//            return $lesson[1];
//        }, $testpapersTargets);
//
//        foreach ($testpaperResults as $ke => &$value) {
//            $value['lessonId'] = $lessonIds[$ke];
//        }
//
//        $courses = $this->getCourseService()->findCoursesByIds($courseIds);
//
//        return $this->render('TopxiaWebBundle:MyQuiz:my-quiz.html.twig', array(
//            'myQuizActive'       => 'active',
//            'user'               => $user,
//            'myTestpaperResults' => $testpaperResults,
//            'myTestpapers'       => $testpapers,
//            'courses'            => $courses,
//            'paginator'          => $paginator
//        ));
            return $this->render('TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig', array(
                'myCollections' => 'active',
                'res' => $res

            ));
        }
        else {
            return $this->render('TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig',array(
                'res' => null
            ));
        }
    }

    public function staticAction(Request $request) {
        $user = $this->getCurrentUser();
        $infos = $this->getWrongCollectionsService()->getCourseInfo($user['id']);
        $questions = $this->getWrongCollectionsService()->getAllUserDone($user['id']);
        return $this->render('TopxiaWebBundle:MyWrongcollection:my-statistic.html.twig',array(
            'statisticActive'   => 'active',
            'questions'         => $questions,
            'infos'              => $infos,
        ));
    }

    protected function getWrongCollectionsService()
    {
        return $this->getServiceKernel()->createService('WrongCollections.WrongCollectionsService');
    }

}