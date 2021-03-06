<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_15e7659fcaabe4c30d890e39ef20c9ee5c19857f3db860055fa57598b11f02ab extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : null), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 3
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 5
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 6
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">课程概览</a></li>
      <li role=\"presentation\" ";
            // line 7
            if (((isset($context["tab"]) ? $context["tab"] : null) == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">课时</a></li>
      <li role=\"presentation\" ";
            // line 8
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 10
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo "> 笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
    ";
        } else {
            // line 12
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">课时</a></li>
      <li role=\"presentation\" ";
            // line 13
            if (((isset($context["tab"]) ? $context["tab"] : null) == "thread")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">讨论区</a></li>
      <li role=\"presentation\" ";
            // line 14
            if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">资料区</a></li>
      <li role=\"presentation\" ";
            // line 15
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a> 
      </li>
      <li role=\"presentation\" ";
            // line 17
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 19
            if (((isset($context["tab"]) ? $context["tab"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">概览</a></li>
    ";
        }
        // line 21
        echo "
  </ul>

  ";
        // line 24
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher"))) {
            // line 25
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        公告
      </a>
  </div>
  ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 32,  230 => 26,  227 => 25,  225 => 24,  220 => 21,  203 => 19,  180 => 17,  157 => 15,  141 => 14,  125 => 13,  108 => 12,  85 => 10,  62 => 8,  46 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
