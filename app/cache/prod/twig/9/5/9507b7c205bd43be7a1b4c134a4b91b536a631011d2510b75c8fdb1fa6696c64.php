<?php

/* TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig */
class __TwigTemplate_9507b7c205bd43be7a1b4c134a4b91b536a631011d2510b75c8fdb1fa6696c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyQuiz:layout.html.twig", "TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "quiz-question/my-favorite";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if ((isset($context["favoriteQuestions"]) ? $context["favoriteQuestions"] : null)) {
            // line 8
            echo "    <table class=\"table table-striped table-hover\">
    \t<tbody>
    \t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoriteQuestions"]) ? $context["favoriteQuestions"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["favoriteQuestion"]) {
                // line 11
                echo "    \t\t\t";
                $context["paper"] = $this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute($context["favoriteQuestion"], "target", array()), array(), "array"), "id", array()), array(), "array");
                // line 12
                echo "    \t\t\t";
                $context["question"] = $this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $this->getAttribute($context["favoriteQuestion"], "questionId", array()), array(), "array");
                // line 13
                echo "    \t\t\t
    \t\t\t\t";
                // line 14
                $this->loadTemplate("TopxiaWebBundle:MyQuiz:my-favorite-question-tr.html.twig", "TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig", 14)->display($context);
                // line 15
                echo "
    \t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoriteQuestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    \t</tbody>
    </table>
  ";
        } else {
            // line 20
            echo "    <div class=\"empty\">还没有收藏的题目</div>
  ";
        }
        // line 22
        echo "
";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  95 => 22,  91 => 20,  86 => 17,  71 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  43 => 10,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
