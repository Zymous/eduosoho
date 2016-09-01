<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig */
class __TwigTemplate_fb45bab6accf397f6636d4d8d1ad67cbfb3f8d72fedeeab53ae59498a54b30ea extends Twig_Template
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
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"我的考试/作业\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
