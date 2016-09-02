<?php

/* TopxiaWebBundle:CourseTestpaperManage:tr.html.twig */
class __TwigTemplate_7ade95dad83d0c48bf8c306a0274c56ac8cd844008b300a7fce952485c03e742 extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig", 1);
        // line 2
        echo "<tr data-role='item'>
    <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
    <td>
      <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "name", array()), 40);
        echo "</a>
    </td>
    <td>
      ";
        // line 8
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()) == "draft")) {
            echo "草稿";
        }
        // line 9
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()) == "open")) {
            echo "已发布";
        }
        // line 10
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()) == "closed")) {
            echo "已关闭";
        }
        // line 11
        echo "    </td>
    <td>
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "itemCount", array()), "html", null, true);
        echo "题 <span class=\"text-muted\">/</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "score", array()), "html", null, true);
        echo "分
      ";
        // line 14
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "passedScore", array()) > 0)) {
            // line 15
            echo "        <div class=\"text-muted\"><small>及格：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "passedScore", array()), "html", null, true);
            echo "分</small></div>
      ";
        }
        // line 17
        echo "    </td>
    <td>
      ";
        // line 19
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "limitedTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "limitedTime", array()), "html", null, true);
            echo "分钟";
        } else {
            echo "无限制";
        }
        // line 20
        echo "    </td>
    <td>
      ";
        // line 22
        echo $context["macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
      <br />
      <span class=\"text-muted text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    </td>
    <td>
        <div class=\"btn-group\">
          <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" target=\"_blank\">预览</a>

          <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
          </a>

          <ul class=\"dropdown-menu pull-right\">
            ";
        // line 35
        if (twig_in_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()), array(0 => "draft", 1 => "closed"))) {
            // line 36
            echo "              <li><a class=\"open-testpaper\" href=\"javascript:\" title=\"发布试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span> 发布试卷</a></li>
            ";
        }
        // line 38
        echo "            ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()) == "open")) {
            // line 39
            echo "              <li><a class=\"close-testpaper\" href=\"javascript:\" title=\"关闭试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_close", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> 关闭试卷</a></li>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "status", array()) == "draft")) {
            // line 43
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑试卷信息</a></li>
              <li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> 管理题目</a></li>
              <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items_reset", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-repeat\"></span> 重新生成题目</a></li>
              <li><a href=\"javascript:\" data-name='试卷' data-role='item-delete' data-url=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 删除试卷</a></li>
            ";
        }
        // line 48
        echo "          </ul>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  145 => 46,  141 => 45,  137 => 44,  132 => 43,  130 => 42,  127 => 41,  119 => 39,  116 => 38,  108 => 36,  106 => 35,  96 => 28,  89 => 24,  84 => 22,  80 => 20,  73 => 19,  69 => 17,  63 => 15,  61 => 14,  55 => 13,  51 => 11,  46 => 10,  41 => 9,  37 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
