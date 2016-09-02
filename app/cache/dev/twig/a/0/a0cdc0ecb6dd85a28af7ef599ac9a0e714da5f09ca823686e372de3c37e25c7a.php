<?php

/* TopxiaWebBundle:CourseChapterManage:list-item.html.twig */
class __TwigTemplate_a0cdc0ecb6dd85a28af7ef599ac9a0e714da5f09ca823686e372de3c37e25c7a extends Twig_Template
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
        echo "<li class=\"item-chapter ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "type", array()) == "unit")) {
            echo "item-chapter-unit";
        }
        echo " clearfix\" id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
\t<div class=\"item-content\">
\t\t";
        // line 3
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo " 
\t\t\t第 <span class=\"number\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "number", array()), "html", null, true);
            echo "</span> ";
            if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "type", array()) == "unit")) {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
                } else {
                    echo "节";
                }
            } else {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
                } else {
                    echo "章";
                }
            }
            echo "：
\t\t";
        }
        // line 6
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "title", array()), "html", null, true);
        echo "
\t</div>
\t<div class=\"item-actions prs\">
\t\t<div class=\"btn-group\">
\t\t<button class=\"btn btn-link dropdown-toggle\" title=\"添加\"  data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-plus-sign\"></i></button>
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "type", array()) == "unit")) {
            // line 12
            echo "\t\t \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 14
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                echo " 添加 课时 ";
            } else {
                echo " 添加 直播课时 ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 16
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                // line 17
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 试卷 </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 21
            echo "\t\t\t</ul>
\t\t ";
        } else {
            // line 23
            echo "\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "unit", "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t   <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 28
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                echo " 添加 课时 ";
            } else {
                echo " 添加 直播课时 ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 30
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
                // line 31
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 试卷 </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 35
            echo "\t\t\t</ul>
\t\t";
        }
        // line 36
        echo "\t
\t\t</div>

\t\t<button class=\"btn btn-link\" title=\"编辑\" data-toggle=\"modal\" data-target=\"#modal\" data-keyboard=\"false\" data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></button>

\t\t<button class=\"btn btn-link delete-chapter-btn\" title=\"删除\" data-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "id", array()))), "html", null, true);
        echo "\" data-chapter=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i></button>

\t\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseChapterManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 41,  148 => 39,  143 => 36,  139 => 35,  133 => 32,  130 => 31,  128 => 30,  113 => 28,  101 => 25,  97 => 23,  93 => 21,  87 => 18,  84 => 17,  82 => 16,  67 => 14,  63 => 12,  61 => 11,  52 => 6,  33 => 4,  29 => 3,  19 => 1,);
    }
}
