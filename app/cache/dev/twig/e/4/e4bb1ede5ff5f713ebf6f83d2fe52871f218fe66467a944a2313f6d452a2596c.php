<?php

/* TopxiaWebBundle:Course:reviews.html.twig */
class __TwigTemplate_e4bb1ede5ff5f713ebf6f83d2fe52871f218fe66467a944a2313f6d452a2596c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:reviews.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), null)) : (null));
        // line 7
        $context["tab"] = "review";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_course_main($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 11
        $this->loadTemplate("TopxiaWebBundle:Review:Widget/list.html.twig", "TopxiaWebBundle:Course:reviews.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 11,  43 => 10,  40 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
