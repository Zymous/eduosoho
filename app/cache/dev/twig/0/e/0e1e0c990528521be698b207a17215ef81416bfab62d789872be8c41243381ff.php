<?php

/* TopxiaWebBundle:MyWrongcollection:my-statistic.html.twig */
class __TwigTemplate_0e1e0c990528521be698b207a17215ef81416bfab62d789872be8c41243381ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:layout.html.twig", "TopxiaWebBundle:MyWrongcollection:my-statistic.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyWrongcollection:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "错题统计 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions"))) {
            // line 7
            echo "  ";
            // line 8
            echo "    ";
            // line 9
            echo "    \t";
            // line 10
            echo "    \t\t";
            // line 11
            echo "    \t\t\t";
            // line 12
            echo "    \t\t\t";
            // line 13
            echo "    \t\t\t\t";
            // line 14
            echo "    \t\t\t";
            // line 15
            echo "    \t\t\t\t";
            // line 16
            echo "    \t\t";
            // line 17
            echo "    \t";
            // line 18
            echo "    ";
            // line 19
            echo "    ";
            // line 20
            echo "  ";
            // line 21
            echo "    ";
            // line 22
            echo "  ";
            // line 23
            echo "\t<div>您的做题总数是： ";
            echo twig_escape_filter($this->env, (isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), "html", null, true);
            echo "</div>
\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 25
                echo "\t<div>第";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], 0, array(), "array"), "id", array()), "html", null, true);
                echo "门课程是";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["info"], 0, array(), "array"), "title", array()), "html", null, true);
                echo "</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t";
        } else {
            // line 28
            echo "\t<div class=\"empty\">还没有任何统计记录 我很慌怎么办</div>
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:my-statistic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  96 => 28,  93 => 27,  82 => 25,  78 => 24,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
