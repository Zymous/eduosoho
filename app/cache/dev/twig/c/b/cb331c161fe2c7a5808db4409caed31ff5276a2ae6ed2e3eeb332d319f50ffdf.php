<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-determine.html.twig */
class __TwigTemplate_cb331c161fe2c7a5808db4409caed31ff5276a2ae6ed2e3eeb332d319f50ffdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-determine.html.twig", 1);
        $this->blocks = array(
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_question_extra_fields($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>答案</label></div>
    <div class=\"col-md-8 controls radios \">
      ";
        // line 8
        echo $this->env->getExtension('topxia_html_twig')->radios("answer[]", array("1" => "正确", "0" => "错误"), twig_join_filter((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), array(0 => "-1"))) : (array(0 => "-1")))));
        echo "
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-determine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
