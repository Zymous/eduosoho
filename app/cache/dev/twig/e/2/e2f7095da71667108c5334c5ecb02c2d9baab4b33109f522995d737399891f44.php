<?php

/* TopxiaWebBundle:MyWrongcollection:wrong-essay.html.twig */
class __TwigTemplate_e2f7095da71667108c5334c5ecb02c2d9baab4b33109f522995d737399891f44 extends Twig_Template
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
        if ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) {
            // line 2
            echo "
\t\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t\t  <div class=\"testpaper-question-result\">

\t\t\t\t\t<ul class=\"nav nav-pills nav-mini mbm\">
\t\t\t\t\t\t<li><a href=\"#teacherAnswer";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">参考答案</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<strong class=\"text-success\">";
            // line 9
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter(twig_join_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "answer", array()), "或")));
            echo "</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t\t\t  <a href=\"/lesson/215/test/1/redo\" class=\"btn btn-default btn-sm\">重做知识点题</a>
\t\t\t\t  <a href=\"../";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm\" target=\"_blank\">查看知识点</a>
\t\t\t\t";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:flag.html.twig", "TopxiaWebBundle:MyWrongcollection:wrong-essay.html.twig", 16)->display(array_merge($context, array("flags" => array(0 => "analysis"))));
            // line 17
            echo "\t\t  \t  </div>
\t\t\t</div>
\t\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
            // line 19
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "analysis", array())));
            echo "</div>



\t";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:wrong-essay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  48 => 17,  46 => 16,  42 => 15,  33 => 9,  28 => 7,  21 => 2,  19 => 1,);
    }
}
