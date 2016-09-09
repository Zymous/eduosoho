<?php

/* TopxiaWebBundle:MyWrongcollection:wrong-choice.html.twig */
class __TwigTemplate_5570a9b7d18e9969ff7895baf0120fe3a78b923248d463e273f6bb2e35218bb5 extends Twig_Template
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
            echo "\t";
            $context["keys"] = array();
            // line 3
            echo "\t";
            $context["keys_answer"] = array();
            // line 4
            echo "\t\t<ul class=\"testpaper-question-choices\">
\t\t\t ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "metas", array()), "choices", array()));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 6
                echo "\t\t\t  ";
                $context["itemClass"] = ((twig_in_filter($context["key"], $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "answer", array()))) ? ("testpaper-question-choice-right") : (""));
                // line 7
                echo "\t\t\t  ";
                $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
                // line 8
                echo "\t\t\t\t<li class=\"";
                echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : $this->getContext($context, "itemClass")), "html", null, true);
                echo "\"><span class=\"testpaper-question-choice-index\">";
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : $this->getContext($context, "choiceIndex")), "html", null, true);
                echo ".</span> ";
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
                echo "</li>
\t\t\t ";
                // line 9
                if (twig_in_filter($context["key"], $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "answer", array()))) {
                    // line 10
                    echo "\t\t\t\t ";
                    $context["keys"] = twig_array_merge((isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : $this->getContext($context, "choiceIndex"))));
                    // line 11
                    echo "\t\t\t ";
                }
                // line 12
                echo "\t\t\t ";
                if (twig_in_filter($context["key"], (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "answer", array()), array())) : (array())))) {
                    // line 13
                    echo "\t\t\t\t ";
                    $context["keys_answer"] = twig_array_merge((isset($context["keys_answer"]) ? $context["keys_answer"] : $this->getContext($context, "keys_answer")), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : $this->getContext($context, "choiceIndex"))));
                    // line 14
                    echo "\t\t\t ";
                }
                // line 15
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>
\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t\t\t  正确答案是 <strong class=\"text-success\">";
            // line 19
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : $this->getContext($context, "keys")), ","), "html", null, true);
            echo "</strong>
\t\t  </div>

\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t<a href=\"/lesson/215/test/1/redo\" class=\"btn btn-default btn-sm\">重做知识点题</a>
\t\t\t\t<a href=\"../";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm\" target=\"_blank\">查看知识点</a>
\t\t\t\t";
            // line 25
            $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:flag.html.twig", "TopxiaWebBundle:MyWrongcollection:wrong-choice.html.twig", 25)->display(array_merge($context, array("flags" => array(0 => "analysis"))));
            // line 26
            echo "\t\t\t</div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
            // line 29
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "analysis", array())));
            echo "</div>
\t";
            // line 31
            echo "\t\t";
            // line 32
            echo "
\t\t  ";
            // line 34
            echo "\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t";
            // line 36
            echo "
\t\t\t\t\t";
            // line 38
            echo "\t\t\t\t\t\t";
            // line 39
            echo "\t\t\t\t\t\t";
            // line 40
            echo "\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t";
            // line 42
            echo "\t\t  ";
            // line 43
            echo "\t\t  ";
            // line 44
            echo "\t\t\t";
            // line 45
            echo "\t\t  ";
            // line 46
            echo "\t\t";
            // line 47
            echo "
\t\t";
            // line 49
            echo "\t\t  ";
            // line 50
            echo "\t\t  \t";
            // line 51
            echo "\t\t\t\t";
            // line 52
            echo "\t\t  \t";
            // line 53
            echo "\t\t  ";
            // line 54
            echo "
\t\t  ";
            // line 56
            echo "\t\t";
            // line 57
            echo "

\t";
            // line 60
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:wrong-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 60,  148 => 57,  146 => 56,  143 => 54,  141 => 53,  139 => 52,  137 => 51,  135 => 50,  133 => 49,  130 => 47,  128 => 46,  126 => 45,  124 => 44,  122 => 43,  120 => 42,  118 => 41,  116 => 40,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  105 => 34,  102 => 32,  100 => 31,  96 => 29,  91 => 26,  89 => 25,  85 => 24,  77 => 19,  72 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  40 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
