<?php

/* TopxiaWebBundle:Default:middle-banner.html.twig */
class __TwigTemplate_e2946a5643efdf26c85265fc5c933fd88a16ea17729ef8c0b855f1ef23f3d2f8 extends Twig_Template
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
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:middle_banner");
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
