<?php

/* TopxiaWebBundle:MyCourse:nav-pill.html.twig */
class __TwigTemplate_fe17afaf2bba4f3dfaa7f6e3f827ddb1bdd6a4dfa2c989748b3cb1f147ab5809 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
\t<li";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">学习中</a></li>
\t<li";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learned");
        echo "\">已学完</a></li>
\t<li";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_favorited");
        echo "\">收藏</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
