<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig */
class __TwigTemplate_e29e9ce13aa7e724c615f3d7ebd07c81a7fd9702fe25953285d6cc0ae021b18a extends Twig_Template
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
        if (( !((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), null)) : (null)) == "teacher")) {
            // line 2
            echo "
<div class=\"testpaper-question testpaper-question-fill ";
            // line 3
            if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.testpaper_watermark")) {
                echo "testpaper-watermark";
            }
            echo "\" data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_testpaper_watermark");
            echo "\" id=\"question";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "id", array()), "html", null, true);
            echo "\">
\t<div class=\"testpaper-question-body\">
\t  ";
            // line 5
            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig", 5)->display($context);
            // line 6
            echo "  </div>

\t";
            // line 8
            if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
                // line 9
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t\t\t";
                // line 11
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "status", array()) == "right")) {
                    // line 12
                    echo "\t\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array") == 1)) {
                        echo " 正确 ";
                    } else {
                        echo " 错误 ";
                    }
                    echo "</strong class=\"text-success\">，你答对了
\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 13
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "status", array()) == "wrong")) {
                    // line 14
                    echo "\t\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array") == 1)) {
                        echo " 正确 ";
                    } else {
                        echo " 错误 ";
                    }
                    echo "</strong>， 你<strong class=\"text-danger\">答错</strong>了
\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 15
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "status", array()) == "noAnswer")) {
                    // line 16
                    echo "\t\t\t\t\t正确答案： <strong class=\"text-success\">";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array") == 1)) {
                        echo " 正确 ";
                    } else {
                        echo " 错误 ";
                    }
                    echo "</strong>，你未答题
\t\t\t\t";
                }
                // line 18
                echo "\t\t  </div>

\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t\t\t";
                // line 21
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig", 21)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 22
                echo "\t\t  </div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
                // line 25
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "analysis", array())));
                echo "</div>
\t";
            } else {
                // line 27
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-determine-inputs\">
\t\t\t\t<label class=\"radio-inline ";
                // line 29
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), 0)) : (0)) == 1)) {
                    echo " active";
                }
                echo "\"><input type=\"radio\" data-type=\"determine\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "id", array()), "html", null, true);
                echo "\" value=\"1\" ";
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), 0)) : (0)) == 1)) {
                    echo "checked";
                }
                echo "> 正确</label>
\t\t \t\t<label class=\"radio-inline ";
                // line 30
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), 1)) : (1)) == 0)) {
                    echo " active";
                }
                echo "\"><input type=\"radio\" data-type=\"determine\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "id", array()), "html", null, true);
                echo "\" value=\"0\" ";
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), 1)) : (1)) == 0)) {
                    echo "checked";
                }
                echo ">错误</label>
\t \t\t</div>

\t \t\t<div class=\"testpaper-question-actions pull-right\">
\t \t\t  ";
                // line 34
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig", 34)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"))));
                // line 35
                echo "\t \t\t</div>
\t\t</div>

\t\t";
                // line 38
                if (((array_key_exists("questionPreview", $context)) ? (_twig_default_filter((isset($context["questionPreview"]) ? $context["questionPreview"] : $this->getContext($context, "questionPreview")), false)) : (false))) {
                    // line 39
                    echo "\t\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t\t  \t<div class=\"testpaper-question-result\">
\t\t\t    正确答案是 <strong class=\"text-success\">";
                    // line 41
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array") == 1)) {
                        echo " 正确 ";
                    } else {
                        echo " 错误 ";
                    }
                    echo "</strong class=\"text-success\">
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"testpaper-question-analysis well\">";
                    // line 44
                    echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), "无解析")) : ("无解析"))));
                    echo "</div>
\t  \t";
                }
                // line 46
                echo "
\t";
            }
            // line 48
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  157 => 46,  152 => 44,  142 => 41,  138 => 39,  136 => 38,  131 => 35,  129 => 34,  114 => 30,  102 => 29,  98 => 27,  93 => 25,  88 => 22,  86 => 21,  81 => 18,  71 => 16,  69 => 15,  60 => 14,  58 => 13,  49 => 12,  47 => 11,  43 => 9,  41 => 8,  37 => 6,  35 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
