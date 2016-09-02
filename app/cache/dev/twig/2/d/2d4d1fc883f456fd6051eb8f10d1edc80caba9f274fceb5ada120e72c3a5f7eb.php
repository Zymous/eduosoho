<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig */
class __TwigTemplate_2d4d1fc883f456fd6051eb8f10d1edc80caba9f274fceb5ada120e72c3a5f7eb extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 1);
        // line 2
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())));
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("TopxiaWebBundle:Status:status-block.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
