<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig */
class __TwigTemplate_37ecec6fc3d84d86017e5b864352e40e14785254c017804d636dafaeec0d346d extends Twig_Template
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
        echo "<div class=\"testpaper-question testpaper-question-essay ";
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
        // line 3
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig", 3)->display($context);
        // line 4
        echo "  </div>
\t";
        // line 5
        if (twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished"))) {
            // line 6
            echo "
\t\t";
            // line 7
            if ((((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), null)) : (null)) == "teacher")) {
                // line 8
                echo "
\t\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t\t  <div class=\"testpaper-question-result\">

\t\t\t\t\t<ul class=\"nav nav-pills nav-mini mbm\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#studentAnswer";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "回答</a></li>
\t\t\t\t\t\t<li><a href=\"#teacherAnswer";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">参考答案</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content mbl\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"studentAnswer";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "<span class=\"text-muted\">未回答</span>")) : ("<span class=\"text-muted\">未回答</span>")));
                echo "</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"teacherAnswer";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array"));
                echo "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">得分</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3 controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"得分\" name=\"score_";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\" data-score=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "score", array()), "html", null, true);
                echo "\" value=\"";
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "")) : ("")) == "")) {
                    echo "0";
                }
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">评语</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t<div class=\"testpaper-result-essay-teacherSay\">
\t\t\t\t\t\t\t\t  \t<textarea class=\"form-control testpaper-question-essay-teacherSay-short\" rows=\"1\" style=\"overflow:hidden;line-height:20px;\"></textarea>

\t\t\t\t\t\t\t\t\t<textarea id=\"question-teacherSay-long-";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\" class=\"form-control testpaper-question-essay-teacherSay-long\" name=\"teacherSay_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "questionId", array()), "html", null, true);
                echo "\" style=\"display:none;\" data-image-upload-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
                echo "\" data-image-download-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
                echo "\"></textarea>

\t\t\t\t\t\t\t\t\t<a class=\"btn btn-link btn-muted btn-sm testpaper-question-essay-teacherSay-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up text-muted\"></span> 收起</a>

\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t";
            } elseif (((($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode") == "submitted") || ($this->getAttribute(            // line 49
(isset($context["paperResult"]) ? $context["paperResult"] : $this->getContext($context, "paperResult")), "status", array()) == "finished")) || ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : $this->getContext($context, "paperResult")), "status", array()) == "reviewing"))) {
                // line 50
                echo "\t\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t\t  <div class=\"testpaper-question-result\">
\t\t\t    <div class=\"testpaper-question-result-suggested\">
\t\t\t\t    <div class=\"testpaper-question-result-title\">参考答案：</div>
\t\t\t\t    <div>";
                // line 54
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array"));
                echo "</div>
\t\t\t    </div>
\t\t\t    <div class=\"testpaper-question-result-your\">
\t\t\t\t    <div class=\"testpaper-question-result-title\">你的回答：</div>
\t\t\t\t\t\t<div>";
                // line 58
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), "未回答")) : ("未回答")));
                echo "</div>
\t\t\t    </div>
\t\t\t  ";
                // line 60
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : $this->getContext($context, "paperResult")), "status", array()) == "finished")) {
                    // line 61
                    echo "\t\t\t  \t<div class=\"testpaper-question-result-score mtl\">
\t\t\t  \t\t<div class=\"testpaper-question-result-title\">得分：<strong>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "score", array()), "html", null, true);
                    echo " 分</strong></div>
\t\t\t  \t</div>
\t\t\t  \t";
                    // line 64
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "teacherSay", array()) != "")) {
                        // line 65
                        echo "\t\t\t  \t\t<div class=\"testpaper-question-teacherSay mtl\">
\t\t\t\t\t\t\t<div class=\"testpaper-question-result-title\">评语：</div>
\t\t\t\t\t\t\t<div>";
                        // line 67
                        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "teacherSay", array()));
                        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 70
                    echo "\t\t\t  ";
                } else {
                    // line 71
                    echo "\t\t\t  \t<div class=\"testpaper-question-score mtl\">
\t\t\t  \t\t<div class=\"testpaper-question-result-title\">老师正在批阅！</div>
\t\t\t  \t</div>
\t\t\t  ";
                }
                // line 74
                echo "\t\t
\t\t\t  </div>

\t\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t\t";
                // line 78
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig", 78)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 79
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
                // line 81
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "analysis", array())));
                echo "</div>
\t\t";
            }
            // line 83
            echo "
\t";
        } else {
            // line 85
            echo "
\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-essay-inputs\">
\t\t  \t<textarea class=\"form-control testpaper-question-essay-input-short\" rows=\"1\" style=\"overflow:hidden;line-height:20px;\">";
            // line 88
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "answer", array()), 0, array(), "array"));
            }
            echo "</textarea>

\t\t\t<textarea id=\"question-input-long-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "id", array()), "html", null, true);
            echo "\" class=\"form-control testpaper-question-essay-input-long\" data-type=\"essay\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "id", array()), "html", null, true);
            echo "\" style=\"display:none;\" data-image-upload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "testResult", array()), "answer", array()), 0, array(), "array"));
            }
            echo "</textarea>

\t\t\t<a class=\"btn btn-link btn-muted btn-sm testpaper-question-essay-input-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up text-muted\"></span> 收起</a>

\t\t  </div>
\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t  \t";
            // line 96
            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig", 96)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"))));
            // line 97
            echo "\t\t  </div>
\t  </div>

\t  ";
            // line 100
            if (((array_key_exists("questionPreview", $context)) ? (_twig_default_filter((isset($context["questionPreview"]) ? $context["questionPreview"] : $this->getContext($context, "questionPreview")), false)) : (false))) {
                // line 101
                echo "
\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t  \t<div class=\"testpaper-question-result\">
\t\t    <div class=\"testpaper-question-result-suggested\">
\t\t\t    <div class=\"testpaper-question-result-title\">参考答案：</div>
\t\t\t    <div>";
                // line 106
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "question", array()), "answer", array()), 0, array(), "array"));
                echo "</div>
\t\t    </div>
\t\t</div>
\t  </div>
\t  <div class=\"testpaper-question-analysis well\">";
                // line 110
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), "无解析")) : ("无解析"))));
                echo "</div>
\t  ";
            }
            // line 112
            echo "
\t  

\t";
        }
        // line 116
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 116,  257 => 112,  252 => 110,  245 => 106,  238 => 101,  236 => 100,  231 => 97,  229 => 96,  210 => 90,  203 => 88,  198 => 85,  194 => 83,  189 => 81,  185 => 79,  183 => 78,  177 => 74,  171 => 71,  168 => 70,  162 => 67,  158 => 65,  156 => 64,  151 => 62,  148 => 61,  146 => 60,  141 => 58,  134 => 54,  128 => 50,  126 => 49,  103 => 35,  84 => 25,  72 => 18,  66 => 17,  60 => 14,  50 => 13,  43 => 8,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  31 => 3,  19 => 1,);
    }
}
