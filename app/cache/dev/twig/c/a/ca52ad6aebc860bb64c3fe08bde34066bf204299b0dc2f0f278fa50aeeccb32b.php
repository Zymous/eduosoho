<?php

/* TopxiaAdminBundle:CourseQuestion:tab.html.twig */
class __TwigTemplate_ca52ad6aebc860bb64c3fe08bde34066bf204299b0dc2f0f278fa50aeeccb32b extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
            echo " btn-primary";
        }
        echo "\">未回复</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo "btn-primary";
        }
        echo "\">所有</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  22 => 2,  19 => 1,);
    }
}
