<?php

/* TopxiaWebBundle:MyWrongcollection:my-wrong-tr.html.twig */
class __TwigTemplate_a12772bf67fc241c7d06030864816c04d3711b3a5188654aaf9efbed1f4b90b7 extends Twig_Template
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
            echo "<div class=\"testpaper-question testpaper-question-choice ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.testpaper_watermark")) {
                echo "testpaper-watermark";
            }
            echo "\" data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_testpaper_watermark");
            echo "\" id=\"question";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), "html", null, true);
            echo "\">
\t<div class=\"testpaper-question-body\">
\t<div class=\"testpaper-question-stem-wrap clearfix\">
\t<div class=\"testpaper-question-seq-wrap\">
\t\t<div class=\"testpaper-question-seq\">";
            // line 6
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), null)) : (null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), "html", null, true);
            }
            echo "</div>
\t</div>
\t";
            // line 8
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "fill")) {
                // line 9
                echo "\t\t<div class=\"testpaper-question-stem\">";
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "stem", array()))));
                echo "</div>

\t";
            } else {
                // line 12
                echo "\t\t<div class=\"testpaper-question-stem\">";
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "stem", array())));
                echo "</div>
\t";
            }
            // line 14
            echo "\t</div>
\t";
            // line 15
            if (twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()), array(0 => "single_choice", 1 => "choice", 2 => "uncertain_choice"))) {
                // line 16
                echo "\t\t";
                $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:wrong-choice.html.twig", "TopxiaWebBundle:MyWrongcollection:my-wrong-tr.html.twig", 16)->display($context);
                // line 17
                echo "
\t";
            } else {
                // line 19
                echo "\t\t";
                $this->loadTemplate((("TopxiaWebBundle:MyWrongcollection:wrong-" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array())) . ".html.twig"), "TopxiaWebBundle:MyWrongcollection:my-wrong-tr.html.twig", 19)->display($context);
                // line 20
                echo "\t";
            }
            // line 21
            echo "\t";
            // line 22
            echo "\t";
            // line 23
            echo "\t";
            // line 24
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:my-wrong-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  79 => 23,  77 => 22,  75 => 21,  72 => 20,  69 => 19,  65 => 17,  62 => 16,  60 => 15,  57 => 14,  51 => 12,  44 => 9,  42 => 8,  35 => 6,  21 => 2,  19 => 1,);
    }
}
