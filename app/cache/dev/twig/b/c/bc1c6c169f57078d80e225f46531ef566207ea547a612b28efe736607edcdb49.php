<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\reviewed_testpaper.tpl.html.twig */
class __TwigTemplate_bc1c6c169f57078d80e225f46531ef566207ea547a612b28efe736607edcdb49 extends Twig_Template
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
            echo "  试卷 \"";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "testpaper", array()), "name", array()), 15);
            echo "\"已被批阅  
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
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\reviewed_testpaper.tpl.html.twig";
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
