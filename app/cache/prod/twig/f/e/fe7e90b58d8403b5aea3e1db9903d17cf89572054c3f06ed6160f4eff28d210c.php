<?php

/* ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig */
class __TwigTemplate_fe7e90b58d8403b5aea3e1db9903d17cf89572054c3f06ed6160f4eff28d210c extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"24小时阅卷点评 ";
        // line 2
        if ( !(isset($context["active"]) ? $context["active"] : null)) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"24小时内批阅您提交的试卷，给予有针对性的点评\">试</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }
}
