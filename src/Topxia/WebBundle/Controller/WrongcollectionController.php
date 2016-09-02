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

        $paginator = new Paginator(
            $request,
            $this->getTestpaperService()->findTestpaperResultsCountByUserId($user['id']),
            10
        );

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
        return $this->render('TopxiaWebBundle:MyWrongcollection:layout.html.twig');
    }

}