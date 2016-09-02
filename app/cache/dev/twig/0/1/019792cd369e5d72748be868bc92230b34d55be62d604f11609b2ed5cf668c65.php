<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_019792cd369e5d72748be868bc92230b34d55be62d604f11609b2ed5cf668c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
        echo "\"style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "    ";
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo " 
      课时 <span class=\"number\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 42
        echo "    
    ";
        // line 43
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "free", array()) == 1)) {
            // line 44
            echo "      <span class=\"label label-success\">免费</span>
    ";
        } elseif ((($this->getAttribute(        // line 45
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "tryLookable", array()) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) && ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 46
            echo "      <span class=\"label label-warning mrm\">试看</span>";
        }
        // line 47
        echo "    ";
        if (((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "text") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array()) != 0)) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), false)) : (false)))) {
            // line 48
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"课时文件已删除\">无效课时</span>
    ";
        }
        // line 50
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array()), "html", null, true);
        echo "

    ";
        // line 52
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 53
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), array(0 => "live"))) {
            // line 57
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit", array()) > 0)) {
            // line 61
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "requireCredit", array()) > 0)) {
            // line 65
            echo "      <small class=\"text-muted\">(需";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "requireCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper")) {
            // line 69
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) ? ("视频") : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "audio")) ? ("音频") : ("文件"))));
            // line 70
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 71
                echo "        <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 72
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 73
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 74
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 75
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 77
            echo "    ";
        }
        // line 78
        echo "
    ";
        // line 79
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "unpublished")) {
            // line 80
            echo "      <span class=\"unpublish-warning text-warning\">(未发布)</span>
    ";
        }
        // line 82
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 86
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 87
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 88
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "live")) {
            // line 89
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 91
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 93
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>编辑</a>
    ";
        // line 94
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 95
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        } else {
            // line 97
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        }
        // line 99
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>更多</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">
        
        ";
        // line 104
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper"))) {
            // line 105
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array"), null)) : (null));
            // line 106
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 107
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : $this->getContext($context, "homework"))) {
                // line 108
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>编辑作业</a></li>
            <li><a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>预览作业</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除作业</a></li>
          ";
            } else {
                // line 112
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>布置作业</a></li>
          ";
            }
            // line 114
            echo "            <li class=\"divider\"></li>
          ";
            // line 115
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array());
            // line 116
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : $this->getContext($context, "lessonId")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : $this->getContext($context, "lessonId")), array(), "array"), null)) : (null));
            // line 117
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : $this->getContext($context, "exercise"))) {
                // line 118
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : $this->getContext($context, "exercise")), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除练习</a></li>
          ";
            } else {
                // line 120
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>新增练习</a></li>
          ";
            }
            // line 122
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 124
        echo "
        ";
        // line 125
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video") && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 126
            echo "          ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()), null)) : (null)) == "success")) {
                // line 127
                echo "          <!-- file.createdUserId|default(null) == app.user.id and -->
          <li>
            <a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>弹题管理
            </a>
          </li>
          <li class=\"divider\"></li>
          ";
            }
            // line 135
            echo "        ";
        }
        // line 136
        echo "
        ";
        // line 137
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper")) {
            // line 138
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>添加资料</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 141
        echo "        
        <li class=\"";
        // line 142
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>发布
          </a>
        </li>

        <li class=\"";
        // line 148
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>取消发布
          </a>
        </li>
        <li class=\"";
        // line 153
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>删除
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 154,  406 => 153,  399 => 149,  393 => 148,  385 => 143,  379 => 142,  376 => 141,  369 => 138,  367 => 137,  364 => 136,  361 => 135,  352 => 129,  348 => 127,  345 => 126,  343 => 125,  340 => 124,  336 => 122,  330 => 120,  324 => 118,  321 => 117,  318 => 116,  316 => 115,  313 => 114,  307 => 112,  302 => 110,  298 => 109,  293 => 108,  290 => 107,  287 => 106,  284 => 105,  282 => 104,  275 => 99,  267 => 97,  261 => 95,  259 => 94,  256 => 93,  250 => 91,  244 => 89,  242 => 88,  237 => 87,  235 => 86,  229 => 82,  225 => 80,  223 => 79,  220 => 78,  217 => 77,  211 => 75,  209 => 74,  204 => 73,  202 => 72,  197 => 71,  194 => 70,  191 => 69,  189 => 68,  186 => 67,  180 => 65,  178 => 64,  175 => 63,  169 => 61,  167 => 60,  164 => 59,  158 => 57,  156 => 56,  153 => 55,  147 => 53,  145 => 52,  139 => 50,  135 => 48,  132 => 47,  129 => 46,  127 => 45,  124 => 44,  122 => 43,  119 => 42,  114 => 40,  109 => 39,  105 => 37,  101 => 35,  99 => 34,  96 => 33,  94 => 32,  91 => 31,  89 => 30,  86 => 29,  84 => 28,  81 => 27,  78 => 26,  74 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  50 => 14,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
