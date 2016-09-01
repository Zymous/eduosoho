<?php

/* TopxiaWebBundle:MyTeaching:tab.html.twig */
class __TwigTemplate_603f531f4865b91bc82c78d74a42436144dfc119c5ff949f99187de8cc2c8897 extends Twig_Template
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
        // line 2
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "course")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
        echo "\">课程";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        echo "话题</a></li>
\t<li class=\"";
        // line 3
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_classroom_threads", array("type" => "discussion"));
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        echo "话题</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  22 => 2,  19 => 1,);
    }
}
