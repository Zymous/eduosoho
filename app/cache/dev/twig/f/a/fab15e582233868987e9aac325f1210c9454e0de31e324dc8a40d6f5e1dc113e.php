<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_fab15e582233868987e9aac325f1210c9454e0de31e324dc8a40d6f5e1dc113e extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "materialNum", array()) > 0)) {
            // line 3
            echo "  <i class=\"es-icon es-icon-filedownload mls\" title=\"资料\"></i>
";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter((isset($context["homeworkLessonIds"]) ? $context["homeworkLessonIds"] : $this->getContext($context, "homeworkLessonIds")), null)) : (null))) || twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter((isset($context["exercisesLessonIds"]) ? $context["exercisesLessonIds"] : $this->getContext($context, "exercisesLessonIds")), null)) : (null))))) {
            // line 7
            echo "  <i class=\"es-icon es-icon-mylibrarybooks mls\" title=\"作业、练习\"></i>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "watchLimit", array()) > 0)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : $this->getContext($context, "fromPlugin")), false)) : (false)))) {
            // line 11
            echo "  ";
            $context["remainTime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "watchLimit", array()) * $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length", array())) - (($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 12
            echo "  ";
            if (((isset($context["remainTime"]) ? $context["remainTime"] : $this->getContext($context, "remainTime")) > 0)) {
                // line 13
                echo "    <small class=\"text text-info\">还剩 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter((isset($context["remainTime"]) ? $context["remainTime"] : $this->getContext($context, "remainTime"))), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 15
                echo "    <small class=\"text text-info\">已达最大可看时长</small>
  ";
            }
        }
        // line 18
        echo "

<!-- 右边图标 -->
";
        // line 21
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status", array()) == "published")) {
            // line 22
            echo "  ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "video")) {
                // line 23
                echo "    <span class=\"date\" title=\"视频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"视频课程\"></i>
    </span>
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "audio")) {
                // line 30
                echo "    <span class=\"date\" title=\"音频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"音频课程\"></i>
    </span>
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "text")) {
                // line 37
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"图文课程\" data-original-title=\"图文\"></i>
    </span>
  ";
            }
            // line 41
            echo "    
  ";
            // line 42
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "testpaper")) {
                // line 43
                echo "    ";
                $context["endTime"] = (($this->getAttribute($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : $this->getContext($context, "testpapers")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "mediaId", array()), array(), "array"), "limitedTime", array()) * 60) + $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "testStartTime", array()));
                // line 44
                echo "    ";
                if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()), null)) : (null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "testMode", array()) == "realTime"))) {
                    // line 45
                    echo "      <span class=\"color-gray course-type \">
        ";
                    // line 46
                    if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "testStartTime", array()))) {
                        // line 47
                        echo "            考试倒计时:<span class=\"color-primary pls\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "testStartTime", array())), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 49
                        echo "          ";
                        if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < (isset($context["endTime"]) ? $context["endTime"] : $this->getContext($context, "endTime")))) {
                            // line 50
                            echo "              考试已开始
          ";
                        } else {
                            // line 52
                            echo "              考试已结束
          ";
                        }
                        // line 54
                        echo "      ";
                    }
                    // line 55
                    echo "      </span>
    ";
                } else {
                    // line 57
                    echo "      <span class=\"course-type\">
        <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"试卷\" data-original-title=\"试卷\"></i>
      </span>
    ";
                }
                // line 61
                echo "  ";
            }
            // line 62
            echo "
  ";
            // line 63
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "ppt")) {
                // line 64
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"PPT课程\"></i>
    </span>
  ";
            }
            // line 68
            echo "
  ";
            // line 69
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "document")) {
                // line 70
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"文档课程\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 74
            echo "
  ";
            // line 75
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "flash")) {
                // line 76
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"flash课程\"></i>
    </span>
  ";
            }
            // line 80
            echo "
  ";
            // line 81
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "live")) {
                // line 82
                echo "    
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"直播课程\"></i>
      ";
                // line 85
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime")))) {
                    // line 86
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime", array()), "m月d日"), "html", null, true);
                    echo " 
          ";
                    // line 92
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute(                // line 94
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime"))) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime"))))) {
                    // line 95
                    echo "        <small class=\"type\">正在直播中</small>
      ";
                } elseif (($this->getAttribute(                // line 96
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime")))) {
                    // line 97
                    echo "
        <small class=\"type\">
          ";
                    // line 99
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "replayStatus", array()) == "generated")) {
                        // line 100
                        echo "            回放
          ";
                    } else {
                        // line 102
                        echo "            直播结束
          ";
                    }
                    // line 104
                    echo "        </small>
        
      ";
                }
                // line 107
                echo "    </span>
  ";
            }
            // line 109
            echo "
";
        } else {
            // line 111
            echo "  <span class=\"period-state\">未发布</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 111,  242 => 109,  238 => 107,  233 => 104,  229 => 102,  225 => 100,  223 => 99,  219 => 97,  217 => 96,  214 => 95,  212 => 94,  206 => 92,  201 => 86,  199 => 85,  194 => 82,  192 => 81,  189 => 80,  183 => 76,  181 => 75,  178 => 74,  172 => 70,  170 => 69,  167 => 68,  161 => 64,  159 => 63,  156 => 62,  153 => 61,  147 => 57,  143 => 55,  140 => 54,  136 => 52,  132 => 50,  129 => 49,  123 => 47,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  101 => 37,  99 => 36,  96 => 35,  85 => 30,  83 => 29,  80 => 28,  69 => 23,  66 => 22,  64 => 21,  59 => 18,  54 => 15,  48 => 13,  45 => 12,  42 => 11,  40 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
