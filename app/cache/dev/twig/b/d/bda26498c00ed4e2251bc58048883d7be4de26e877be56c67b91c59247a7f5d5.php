<?php

/* TopxiaWebBundle:MyWrongcollection:wrong-fill.html.twig */
class __TwigTemplate_bda26498c00ed4e2251bc58048883d7be4de26e877be56c67b91c59247a7f5d5 extends Twig_Template
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
            echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t    <ul>
\t\t      ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "answer", array()));
            foreach ($context['_seq'] as $context["index"] => $context["answer"]) {
                // line 6
                echo "\t\t\t    \t<li>
\t\t\t    \t  填空(";
                // line 7
                echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
                echo ")： 正确答案 <strong class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_join_filter($context["answer"], " 或 "), "html", null, true);
                echo "</strong>
\t\t\t    \t</li>
\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t    </ul>

\t\t\t</div>
\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t\t  <a href=\"/test/2/preview\" class=\"btn btn-default btn-sm\">重做知识点题</a>
\t\t\t  <a href=\"../";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm\" target=\"_blank\">查看知识点</a>
\t\t\t\t";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:flag.html.twig", "TopxiaWebBundle:MyWrongcollection:wrong-fill.html.twig", 16)->display(array_merge($context, array("flags" => array(0 => "analysis"))));
            // line 17
            echo "\t\t  </div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
            // line 20
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "analysis", array())));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:wrong-fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  57 => 17,  55 => 16,  51 => 15,  44 => 10,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
