<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\finished_testpaper.tpl.html.twig */
class __TwigTemplate_5de16023580e29bedc66ebda1af4200f55469a1f9f3d0a072ba2e11394c7ab59 extends Twig_Template
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
        $context["props"] = $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "properties", array());
        // line 2
        echo "
";
        // line 3
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "simple")) {
            // line 4
            echo "  完成了考试 ";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "testpaper", array()), "name", array()), 15);
            echo "</a>
";
        } elseif ((        // line 5
(isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "full")) {
            // line 6
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\finished_testpaper.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
