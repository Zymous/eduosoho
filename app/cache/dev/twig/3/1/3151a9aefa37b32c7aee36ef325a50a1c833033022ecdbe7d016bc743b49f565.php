<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_3151a9aefa37b32c7aee36ef325a50a1c833033022ecdbe7d016bc743b49f565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的学习 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 12
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 13
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">我的网校</li>
          <li class=\"list-group-item
           ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "growth")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">我的成长</a>
          </li>
        </ul>
      ";
        }
        // line 21
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isTeacher", array(), "method")) {
            // line 22
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">我的教学</li>
          <li class=\"list-group-item
           ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">在教课程</a>
          </li>

          
            <li class=\"list-group-item ";
            // line 30
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-classroom")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("my_teaching_classrooms");
            echo "\">所教";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
              </a>
           </li>
          

          <li class=\"list-group-item ";
            // line 36
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
            <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 40
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题</a>
          </li>
          
          <li class=\"list-group-item ";
            // line 44
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-check")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">试卷批阅
            </a>
          </li>
          
          ";
            // line 49
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 50
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-homework-check")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("my_teaching_homework_list");
                echo "\">作业批改</a>
            </li>
          ";
            }
            // line 54
            echo "
          ";
            // line 55
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
                // line 56
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "material-lib")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("material_lib_browsing");
                echo "\">教学资料库</a>
            </li>
          ";
            }
            // line 60
            echo "        </ul>
      ";
        }
        // line 62
        echo "        
      <ul class=\"list-group\">
        <li class=\"list-group-heading\">我的学习</li>
        <li class=\"list-group-item ";
        // line 65
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">我的课程</a>
        </li>

        
          <li class=\"list-group-item ";
        // line 70
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("my_classrooms");
        echo "\">我的";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a>
          </li>
        

        ";
        // line 75
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 76
            echo "        <li class=\"list-group-item
          ";
            // line 77
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
          <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">我的直播课表</a>
        </li>
        ";
        }
        // line 81
        echo "
        <li class=\"list-group-item
        ";
        // line 83
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-questions")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">我的问答</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 87
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">我的话题</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 91
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-notes")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">我的笔记</a>
        </li>
        ";
        // line 94
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 95
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-homeworks")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("my_homework_list");
            echo "\">我的作业</a>
          </li>
        ";
        }
        // line 99
        echo "        <li class=\"list-group-item
        ";
        // line 100
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-quiz")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">我的考试</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 104
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-wrongcollections")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("my_wrongcollections");
        echo "\">我的错题本</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 108
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-group")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">我的小组</a>
        </li>
        ";
        // line 111
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 112
            echo "          <li class=\"list-group-item
          ";
            // line 113
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-task")) {
                echo " active ";
            }
            echo "\" >
            <a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("my_task_calendar");
            echo "\">我的任务</a>
          </li>
        ";
        }
        // line 117
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-md-9\">";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 120,  353 => 117,  347 => 114,  341 => 113,  338 => 112,  336 => 111,  331 => 109,  325 => 108,  319 => 105,  313 => 104,  307 => 101,  301 => 100,  298 => 99,  292 => 96,  285 => 95,  283 => 94,  278 => 92,  272 => 91,  266 => 88,  260 => 87,  254 => 84,  248 => 83,  244 => 81,  238 => 78,  232 => 77,  229 => 76,  227 => 75,  218 => 71,  212 => 70,  205 => 66,  199 => 65,  194 => 62,  190 => 60,  184 => 57,  177 => 56,  175 => 55,  172 => 54,  166 => 51,  159 => 50,  157 => 49,  150 => 45,  144 => 44,  132 => 41,  126 => 40,  114 => 37,  108 => 36,  98 => 31,  92 => 30,  85 => 26,  79 => 25,  74 => 22,  71 => 21,  64 => 17,  58 => 16,  53 => 13,  51 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
