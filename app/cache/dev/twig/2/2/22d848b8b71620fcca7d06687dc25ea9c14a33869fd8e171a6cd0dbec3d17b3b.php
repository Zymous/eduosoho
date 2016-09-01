<?php

/* TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig */
class __TwigTemplate_22d848b8b71620fcca7d06687dc25ea9c14a33869fd8e171a6cd0dbec3d17b3b extends Twig_Template
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
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()))) ||  !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"电话客服\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig";
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
