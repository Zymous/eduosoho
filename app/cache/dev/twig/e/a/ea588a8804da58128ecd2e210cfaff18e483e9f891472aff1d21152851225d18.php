<?php

/* TopxiaWebBundle:LessonQuestionPlugin:index.html.twig */
class __TwigTemplate_ea588a8804da58128ecd2e210cfaff18e483e9f891472aff1d21152851225d18 extends Twig_Template
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
        echo "<div class=\"question-list-pane\">
\t<div data-role=\"list-pane\" >
\t   ";
        // line 3
        $this->loadTemplate("TopxiaWebBundle:LessonQuestionPlugin:form.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:index.html.twig", 3)->display($context);
        // line 4
        echo "\t   ";
        $this->loadTemplate("TopxiaWebBundle:LessonQuestionPlugin:list.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:index.html.twig", 4)->display($context);
        // line 5
        echo "\t</div>
\t<div data-role=\"show-pane\" style=\"display:none;\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
