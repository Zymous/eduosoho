<?php

/* TopxiaWebBundle:CourseLesson/Part:status-label.html.twig */
class __TwigTemplate_bb57ae09d3c09df8e47c316259bd49b531dfa1904fcb9401c9e653a86c04bc3d extends Twig_Template
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
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "free", array())) {
            // line 2
            echo "\t  <span class=\"label label-success mrm\">免费</span>
";
        } elseif (($this->getAttribute(        // line 3
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "tryLookable", array()) && ((($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 4
            echo "\t  <span class=\"label label-warning mrm\">试看</span>
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
