<?php

/* TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig */
class __TwigTemplate_368a56176d76b10bf8780617218c1c7c965aa6d0e30e07cb1dc3f10a86e7528c extends Twig_Template
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
        $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
        // line 2
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()), 0, array(), "array"), "name", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"QQ客服及QQ群\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
