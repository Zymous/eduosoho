<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-uncertain_choice.html.twig */
class __TwigTemplate_a7372c095e559707852826b02260f259cd6987eacc5a785d8b37c3d0d74bea1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-uncertain_choice.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-uncertain_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
