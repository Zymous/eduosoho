<?php

/* TopxiaWebBundle:Course:courses-block-grid.html.twig */
class __TwigTemplate_3fa9fb7ca6170d62f8a6aa258db7465453f8f43e58f045fd3d5e49375ca510fb extends Twig_Template
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
        echo "<style>
.classroomPicture{

  width: 24px;
  height: 24px;
}
</style>
";
        // line 8
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "default")) : ("default"));
        // line 9
        echo "<ul class=\"course-grids\">
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 11
            echo "    <li class=\"course-grid\">
      <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"grid-body\">
        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "largePicture", array()), "course.png"), "html", null, true);
            echo "\"  class=\"img-responsive thumb\">
          ";
            // line 14
            if (($this->getAttribute($context["course"], "status", array()) == "draft")) {
                // line 15
                echo "            <span class=\"label  label-warning course-status\">未发布</span>
          ";
            } elseif (($this->getAttribute(            // line 16
$context["course"], "status", array()) == "closed")) {
                // line 17
                echo "            <span class=\"label label-danger course-status\">已关闭</span>
          ";
            }
            // line 19
            echo "          ";
            if (($this->getAttribute($context["course"], "status", array()) != "closed")) {
                echo " 
            ";
                // line 20
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 21
                    echo "              <span class=\"label label-success series-mode-label\">更新中</span>
            ";
                } elseif (($this->getAttribute(                // line 22
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 23
                    echo "              <span class=\"label label-warning series-mode-label\">已完结</span>
            ";
                }
                // line 25
                echo "          ";
            }
            // line 26
            echo "          ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 27
                echo "            ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 28
                echo "            ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array())))) {
                    // line 29
                    echo "              <span class=\"label label-warning series-mode-label\">正在直播中</span>
            ";
                } else {
                    // line 31
                    echo "              <span class=\"label label-success series-mode-label\">直播</span>
            ";
                }
                // line 33
                echo "          ";
            }
            // line 34
            echo "
        <span class=\"title\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</span>
        ";
            // line 36
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "default", 1 => "teach"))) {
                // line 37
                echo "
          ";
                // line 38
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 39
                    echo "            ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 40
                    echo "            ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                        // line 41
                        echo "              <span class=\"live-course-lesson metas\">
                <span class=\"text-success mrm\">";
                        // line 42
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
                <span class=\"text-muted mrm\">第";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
                        echo "课时</span>
              </span>
            ";
                    }
                    // line 46
                    echo "          ";
                }
                // line 47
                echo "
          <span class=\"metas clearfix\">
            <span class=\"price-col\">
              <span class=\"meta-label\">价格</span>
              ";
                // line 51
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 52
                    echo "              <span class=\"price-num\" style=\"display:inline \" >";
                    if (($this->getAttribute($context["course"], "coinPrice", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coinPrice", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    } else {
                        echo "免费";
                    }
                    echo "</span>
              ";
                } else {
                    // line 54
                    echo "              <span class=\"price-num\">";
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                        echo "元";
                    } else {
                        echo "免费";
                    }
                    echo "</span>
              ";
                }
                // line 56
                echo "            </span>

            ";
                // line 58
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 59
                    echo "            <span class=\"student-col\">
              <span class=\"meta-label\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                    echo "</span>
              <span class=\"student-num\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "人</span>
            </span>
            ";
                }
                // line 64
                echo "
            <span class=\"review-col\">
              ";
                // line 66
                if (($this->getAttribute($context["course"], "ratingNum", array()) > 0)) {
                    // line 67
                    echo "                <span class=\"meta-label\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "ratingNum", array()), "html", null, true);
                    echo "</strong> 评价</span>
                <span class=\"review-rating\">
                  <span class=\"stars-";
                    // line 69
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                    echo "\">&nbsp;</span>
                </span>
              ";
                } else {
                    // line 72
                    echo "                <span class=\"meta-label\">无评价</span>
                <span class=\"review-rating\">
                  <span class=\"stars-0\">&nbsp;</span>
                </span>
              ";
                }
                // line 77
                echo "            </span>

          </span>
        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "default"))) {
                // line 83
                echo "          ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 84
                echo "          ";
                if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                    // line 85
                    echo "            <span class=\"teacher clearfix\">
              <img src=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smallAvatar", array()), "avatar.png"), "html", null, true);
                    echo "\" class=\"thumb\">
              <span class=\"nickname ellipsis\">";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                    echo "</span>
              <span class=\"user-title ellipsis\">";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
                    echo "</span>
            </span>
          ";
                }
                // line 91
                echo "        ";
            }
            // line 92
            echo "
        ";
            // line 93
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "learn"))) {
                // line 94
                echo "          <div class=\"learn-status\">

            
              <div class=\"mbm\"> 
              ";
                // line 98
                if (($this->getAttribute($context["course"], "classroomCount", array()) > 0)) {
                    // line 99
                    echo "                ";
                    $context["classroom"] = $this->getAttribute($context["course"], "classroom", array());
                    // line 100
                    echo "                <img class=\"classroomPicture\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()), "classroom.png"), "html", null, true);
                    echo "\"> <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
                    echo "
                ";
                    // line 101
                    if (($this->getAttribute($context["course"], "classroomCount", array()) > 1)) {
                        // line 102
                        echo "                等
                ";
                    }
                    // line 103
                    echo "</span>
              ";
                }
                // line 105
                echo "              </div>
            


            ";
                // line 109
                if ($this->getAttribute($context["course"], "memberIsLearned", array())) {
                    // line 110
                    echo "              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"></div>
              </div>
              学习总时长:";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "learnTime", array()), "html", null, true);
                    echo "
              <div class=\"action clearfix\"><span class=\"btn btn-default btn-sm pull-right\">查看课程</span></div>
            ";
                } else {
                    // line 116
                    echo "              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->calculatePercent($this->getAttribute($context["course"], "memberLearnedNum", array()), $this->getAttribute($context["course"], "lessonNum", array())), "html", null, true);
                    echo ";\"></div>
              </div>
              <div class=\"action\"><span class=\"btn btn-primary btn-sm\">继续学习</span></div>
            ";
                }
                // line 121
                echo "          </div>
          ";
                // line 122
                if (($this->getAttribute($context["course"], "status", array()) == "draft")) {
                    // line 123
                    echo "            <span class=\"label  label-warning course-status\">未发布</span>
          ";
                } elseif (($this->getAttribute(                // line 124
$context["course"], "status", array()) == "closed")) {
                    // line 125
                    echo "            <span class=\"label label-danger course-status\">已关闭</span>
          ";
                }
                // line 126
                echo "       
        ";
            }
            // line 128
            echo "
        ";
            // line 129
            if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "teach")) {
                // line 130
                echo "          ";
                if (($this->getAttribute($context["course"], "status", array()) == "published")) {
                    // line 131
                    echo "            <span class=\"label label-success course-status\">已发布</span>
          ";
                } elseif (($this->getAttribute(                // line 132
$context["course"], "status", array()) == "draft")) {
                    // line 133
                    echo "            <span class=\"label  label-warning course-status\">未发布</span>
          ";
                } elseif (($this->getAttribute(                // line 134
$context["course"], "status", array()) == "closed")) {
                    // line 135
                    echo "            <span class=\"label label-danger course-status\">已关闭</span>
          ";
                }
                // line 137
                echo "        ";
            }
            // line 138
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 142,  352 => 138,  349 => 137,  345 => 135,  343 => 134,  340 => 133,  338 => 132,  335 => 131,  332 => 130,  330 => 129,  327 => 128,  323 => 126,  319 => 125,  317 => 124,  314 => 123,  312 => 122,  309 => 121,  302 => 117,  299 => 116,  293 => 113,  288 => 110,  286 => 109,  280 => 105,  276 => 103,  272 => 102,  270 => 101,  263 => 100,  260 => 99,  258 => 98,  252 => 94,  250 => 93,  247 => 92,  244 => 91,  238 => 88,  234 => 87,  230 => 86,  227 => 85,  224 => 84,  221 => 83,  219 => 82,  216 => 81,  210 => 77,  203 => 72,  197 => 69,  191 => 67,  189 => 66,  185 => 64,  179 => 61,  175 => 60,  172 => 59,  170 => 58,  166 => 56,  155 => 54,  144 => 52,  142 => 51,  136 => 47,  133 => 46,  127 => 43,  121 => 42,  118 => 41,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  105 => 36,  101 => 35,  98 => 34,  95 => 33,  91 => 31,  87 => 29,  84 => 28,  81 => 27,  78 => 26,  75 => 25,  71 => 23,  69 => 22,  66 => 21,  64 => 20,  59 => 19,  55 => 17,  53 => 16,  50 => 15,  48 => 14,  44 => 13,  40 => 12,  37 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
