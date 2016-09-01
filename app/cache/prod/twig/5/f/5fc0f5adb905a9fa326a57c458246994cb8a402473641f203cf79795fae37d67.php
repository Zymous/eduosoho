<?php

/* TopxiaWebBundle:Article/Part:detail-boy.html.twig */
class __TwigTemplate_5fc0f5adb905a9fa326a57c458246994cb8a402473641f203cf79795fae37d67 extends Twig_Template
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
        echo "<div class=\"article-text\">
  ";
        // line 2
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-boy.html.twig";
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
