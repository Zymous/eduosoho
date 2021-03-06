<?php

/* TopxiaWebBundle:QuizQuestionTest:test-paper-card.html.twig */
class __TwigTemplate_1665e9b31c03eba845cf69ac2e405df7b17b86f822efe76093e65fda52e92099 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t";
        // line 3
        if (((isset($context["limitTime"]) ? $context["limitTime"] : $this->getContext($context, "limitTime")) != 0)) {
            // line 4
            echo "\t\t\t<span class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("isPreview", $context)) ? (_twig_default_filter((isset($context["isPreview"]) ? $context["isPreview"] : $this->getContext($context, "isPreview")), "")) : ("")), "html", null, true);
            echo " testpaper-card-timer\" id=\"time_show\" data-time=\"";
            if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array()), 0)) : (0)) == 0)) {
                echo twig_escape_filter($this->env, (isset($context["limitTime"]) ? $context["limitTime"] : $this->getContext($context, "limitTime")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ((isset($context["limitTime"]) ? $context["limitTime"] : $this->getContext($context, "limitTime")) - $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : $this->getContext($context, "paperResult")), "usedTime", array())), "html", null, true);
            }
            echo "\">00:00</span>
\t\t\t";
            // line 5
            if (((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "testMode", array()), "normal")) : ("normal")) != "realTime")) {
                // line 6
                echo "\t\t\t<button class=\"btn btn-sm btn-default pull-right\"";
                if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
                    echo " id=\"suspend\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_do_test_suspend", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
                    echo "\" data-goto=\"";
                    echo $this->env->getExtension('routing')->getPath("my_quiz");
                    echo "\"";
                }
                echo ">下次再做</button>
\t\t\t<button id=\"pause\" class=\"btn btn-sm btn-default pull-right\"";
                // line 7
                if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
                    echo " data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("course_manage_do_test_pause");
                    echo "\"";
                }
                echo ">暂停</button>
\t\t    ";
            }
            // line 9
            echo "\t\t";
        } else {
            // line 10
            echo "\t\t  <span class=\"testpaper-card-timer\"><small class=\"text-muted\" style=\"font-size:14px;\">时间不限</small></span>
\t\t\t<button class=\"btn btn-sm btn-default pull-right\"";
            // line 11
            if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
                echo " id=\"suspend\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_do_test_suspend", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
                echo "\" data-goto=\"";
                echo $this->env->getExtension('routing')->getPath("my_quiz");
                echo "\"";
            }
            echo ">下次再做</button>
\t\t";
        }
        // line 13
        echo "\t</div>
\t<div class=\"panel-body\">

\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 17
            echo "
\t\t\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), $context["type"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "\t\t\t\t";
                if (($this->getAttribute($context["item"], "questionType", array()) != "material")) {
                    // line 20
                    echo "\t\t\t\t\t<a href=\"javascript:;\" data-anchor=\"#question";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                    echo "\" class=\"btn btn-default btn-index pull-left ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array()), null)) : (null))) {
                        echo "active";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 23
                        echo "\t\t\t\t\t\t<a href=\"javascript:;\" data-anchor=\"#question";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                        echo "\" class=\"btn btn-default btn-index pull-left ";
                        if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array()), null)) : (null))) {
                            echo "active";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t\t<div class=\"clearfix mtm mbm\"></div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t</div>
\t<div class=\"panel-footer\">
\t\t";
        // line 35
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 36
            echo "\t\t<button class=\"btn btn-success btn-block do-test\" id=\"finishPaper\" data-ajax=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_submit_test", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_finish_test", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\" data-goto=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\">我要交卷</button>
\t\t";
        } else {
            // line 38
            echo "\t\t<button class=\"btn btn-success btn-block\" disabled=\"disabled\">我要交卷</button>
\t\t";
        }
        // line 40
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:test-paper-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 40,  162 => 38,  152 => 36,  150 => 35,  145 => 32,  136 => 28,  129 => 26,  126 => 25,  111 => 23,  106 => 22,  94 => 20,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  75 => 13,  64 => 11,  61 => 10,  58 => 9,  49 => 7,  38 => 6,  36 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
