<?php

/* TopxiaWebBundle:MyWrongcollection:flag.html.twig */
class __TwigTemplate_f4b190fa36cd82a9e9420ec542e532445a9b3c4ec545dbd07f451cc9f96de157 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/wrong-collections/show-analysis");
        // line 2
        if ((twig_in_filter("mark", (isset($context["flags"]) ? $context["flags"] : $this->getContext($context, "flags"))) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), null)) : (null)))) {
            // line 3
            echo "  <a class=\"btn btn-link btn-muted btn-sm marking text-muted\"><span class=\"glyphicon glyphicon-bookmark text-muted\"></span> 标记</a>
  <a class=\"btn btn-link btn-sm unMarking\" style=\"display:none\"><span class=\"glyphicon glyphicon-bookmark\"></span> 取消标记</a>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((twig_in_filter("analysis", (isset($context["flags"]) ? $context["flags"] : $this->getContext($context, "flags"))) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), null)) : (null)))) {
            // line 8
            echo "  ";
            if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "analysis", array()) == "")) {
                // line 9
                echo "    <a class=\"btn btn-sm btn-link analysis-btn\"><span class=\"glyphicon glyphicon-chevron-down\"></span> 展开解析</a>
    <a class=\"btn btn-sm btn-link unanalysis-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up\"></span> 收起解析</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 8,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
