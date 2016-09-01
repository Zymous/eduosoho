<?php

/* ClassroomBundle:Classroom:dashboard-nav.html.twig */
class __TwigTemplate_3d6ca6039805cc777102dc51507b84d8a37797a30d7af05835c019c37aba3e2e extends Twig_Template
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
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"";
        // line 3
        if (((isset($context["nav"]) ? $context["nav"] : null) == "introduction")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_introductions", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">介绍</a></li>

    ";
        // line 5
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 6
            echo "      ";
            $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), null);
            // line 7
            echo "      ";
            if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "status", array()) == "published")) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 8
                echo "        ";
                $context["planMember"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), null);
                // line 9
                echo "      ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ( !((array_key_exists("planMember", $context)) ? (_twig_default_filter((isset($context["planMember"]) ? $context["planMember"] : null), null)) : (null))) {
            // line 12
            echo "      <li role=\"presentation\" class=\"";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "course")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">课程 <small class=\"text-muted\">";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) != 0)) {
                echo "( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 16
            echo "      ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:planNav", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "nav" => (isset($context["nav"]) ? $context["nav"] : null))));
            echo "
    ";
        }
        // line 18
        echo "  ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) || ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && (isset($context["member"]) ? $context["member"] : null)))) {
            // line 19
            echo "    <li role=\"presentation\" class=\"";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "review")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_reviews", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">评价 <small class=\"text-muted\">";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()) != 0)) {
                echo "( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 21
            if (((isset($context["nav"]) ? $context["nav"] : null) == "thread")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">话题 <small class=\"text-muted\">";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "threadNum", array()) != 0)) {
                echo "( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "threadNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 23
            if (((isset($context["nav"]) ? $context["nav"] : null) == "note")) {
                echo "active";
            }
            echo "\"><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">笔记 <small class=\"text-muted\">";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "noteNum", array()) != 0)) {
                echo "( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "noteNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>
  ";
        }
        // line 25
        echo "
    <li role=\"presentation\" class=\"";
        // line 26
        if (((isset($context["nav"]) ? $context["nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_teachers", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">师资</a></li>

  </ul>
  
  ";
        // line 30
        if ((isset($context["canManageClassroom"]) ? $context["canManageClassroom"] : null)) {
            // line 31
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
      <i class=\"es-icon es-icon-anonymous-iconfont\"></i>公告
    </a>
  </div>
  ";
        }
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:dashboard-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  147 => 32,  144 => 31,  142 => 30,  131 => 26,  128 => 25,  113 => 23,  98 => 21,  82 => 19,  79 => 18,  73 => 16,  71 => 15,  68 => 14,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  23 => 3,  19 => 1,);
    }
}
