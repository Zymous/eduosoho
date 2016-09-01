<?php

/* TopxiaWebBundle:MyTeaching:course-tab.html.twig */
class __TwigTemplate_a143d04b6167311e4551782afbbc43c4c2cc9066959fabe0349672ca039f8dcc extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">

\t<li class=\"";
        // line 3
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_courses", array("filter" => "normal"));
        echo "\">普通课程</a></li>

\t<li class=\"";
        // line 5
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_courses", array("filter" => "classroom"));
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "课程</a></li>

</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:course-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  23 => 3,  19 => 1,);
    }
}
