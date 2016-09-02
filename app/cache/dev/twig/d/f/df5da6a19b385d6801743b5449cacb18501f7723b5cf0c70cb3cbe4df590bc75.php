<?php

/* TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig */
class __TwigTemplate_df5da6a19b385d6801743b5449cacb18501f7723b5cf0c70cb3cbe4df590bc75 extends Twig_Template
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
        echo " <tr id=\"testpaper-item-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "parentId", array()) > 0)) {
            echo "data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "parentId", array()), "html", null, true);
            echo "\"";
        }
        echo " class=\"";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "subCount", array()) > 0)) {
            echo " have-sub-questions";
        }
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "parentId", array()) > 0)) {
            echo " is-sub-question";
        } else {
            echo " is-question";
        }
        echo "\">
  <td><span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span></td>
  <td>
    <input ";
        // line 4
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "parentId", array()) != 0)) {
            echo " class=\"hidden\" ";
        }
        echo " class=\"notMoveHandle\" type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" data-role=\"batch-item\" >
    <input type=\"hidden\" name=\"questionId[]\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
  </td>
  <td class=\"seq\">";
        // line 7
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "subCount", array()) > 0)) {
            echo "<span class=\"text-muted\">~</span>";
        } else {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), " ")) : (" ")), "html", null, true);
        }
        echo "</td>
  <td>
    ";
        // line 9
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array()), "")) : (""))) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 10
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "stem", array(), "array"), 40);
        echo "
    <div class=\"text-muted text-sm\">
      从属：
      ";
        // line 13
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "target", array()) == ("course-" . $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())))) {
            // line 14
            echo "        本课程
      ";
        } else {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "target", array()), array(), "array", false, true), "simple_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "target", array()), array(), "array", false, true), "simple_name", array()), "--")) : ("--")), "html", null, true);
            echo "
      ";
        }
        // line 18
        echo "    </div>
  </td>
  <td>";
        // line 20
        echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()));
        echo "</td>
  <td>";
        // line 21
        echo $this->env->getExtension('topxia_web_twig')->getDictText("difficulty", $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "difficulty", array()));
        echo "</td>
  <td>
    <input name=\"scores[]\" class=\"notMoveHandle form-control input-sm\"
      ";
        // line 24
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "subCount", array()) > 0)) {
            echo "type=\"hidden\"";
        } else {
            echo "type=\"text\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->scoreTextFilter((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array()), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "score", array()))) : ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "score", array())))), "html", null, true);
        echo "\" data-miss-score=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "any", false, true), "missScore", array(), "any", false, true), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "metas", array(), "any", false, true), "missScore", array(), "any", false, true), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"), 0)) : (0)), "html", null, true);
        echo "\" >
  </td>

  <td>
    <div class=\"btn-group\">
      ";
        // line 29
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "parentId", array()) == 0)) {
            // line 30
            echo "        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" class=\"notMoveHandle btn btn-default btn-sm\">预览</a>
        <a href=\"javascript:\" class=\"notMoveHandle btn btn-default btn-sm item-delete-btn\">删除</a>
        <a href=\"javascript:\" class=\"notMoveHandle btn btn-default btn-sm\" data-role=\"pick-item\" data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_item_picker", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()), "replace" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
            echo "\" >替换</a>
      ";
        }
        // line 34
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  128 => 32,  122 => 30,  120 => 29,  104 => 24,  98 => 21,  94 => 20,  90 => 18,  84 => 16,  80 => 14,  78 => 13,  71 => 10,  67 => 9,  58 => 7,  53 => 5,  45 => 4,  19 => 1,);
    }
}
