<?php

/* TopxiaWebBundle:MyThread:tab.html.twig */
class __TwigTemplate_3db2995a7fb21da028ce2d7116bd484c5ec91a28392f5f3b4704d763984d9878 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">课程话题</a></li>
\t<li class=\"";
        // line 3
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_classroom_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "话题</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  22 => 2,  19 => 1,);
    }
}
