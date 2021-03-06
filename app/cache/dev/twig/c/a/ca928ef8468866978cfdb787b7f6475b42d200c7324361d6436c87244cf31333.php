<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig */
class __TwigTemplate_ca928ef8468866978cfdb787b7f6475b42d200c7324361d6436c87244cf31333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "question";
        // line 6
        $context["script_controller"] = "quiz-question/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "题目 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["parentQuestion"] = ((array_key_exists("parentQuestion", $context)) ? (_twig_default_filter((isset($context["parentQuestion"]) ? $context["parentQuestion"] : $this->getContext($context, "parentQuestion")), null)) : (null));
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading clearfix\">
    题目管理
  </div>
  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">题目管理</a></li>
      ";
        // line 20
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : $this->getContext($context, "parentQuestion"))) {
            // line 21
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : $this->getContext($context, "parentQuestion")), "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : $this->getContext($context, "parentQuestion")), "type", array()));
            echo "</a></li>
      ";
        }
        // line 23
        echo "      <li class=\"active\">";
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "题目</li>
    </ol>
    
    <div id=\"question-creator-widget\"
      data-upload-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_upload", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()))), "html", null, true);
        echo "\"
      data-media-upload-params-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("targetType" => "question", "targetId" => 0)), "html", null, true);
        echo "\"
      data-media-upload-callback-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => "question", "targetId" => 0)), "html", null, true);
        echo "\"

      >
      <form id=\"question-create-form\" data-role=\"question-form\" class=\"form-horizontal quiz-question\" method=\"post\" 
          action=\"";
        // line 33
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        }
        echo "\"
          >
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

        ";
        // line 37
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : $this->getContext($context, "parentQuestion"))) {
            // line 38
            echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>从属</label></div>
          <div class=\"col-md-8 controls\">
            <select class=\"form-control width-input width-input-large\" name=\"target\" data-role=\"target\">
              ";
            // line 42
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetsChoices"]) ? $context["targetsChoices"] : $this->getContext($context, "targetsChoices")), (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), null)) : (null)));
            echo "
            </select>
            <div class=\"help-block\">可以针对本课程或者某个课时出题</div>
          </div>
        </div>
        ";
        }
        // line 48
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>难度</label></div>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 52
        echo $this->env->getExtension('topxia_html_twig')->radios("difficulty", array("simple" => "简单", "normal" => "一般", "difficulty" => "困难"), (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array()), "normal")) : ("normal")));
        echo "
          </div>          
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"question-stem-field\">";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("question_stem_label", $context)) ? (_twig_default_filter((isset($context["question_stem_label"]) ? $context["question_stem_label"] : $this->getContext($context, "question_stem_label")), "题干")) : ("题干")), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control\" id=\"question-stem-field\" data-image-upload-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"stem\" style=\"height:180px;\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            ";
        // line 60
        $context["question_stem_help"] = ((array_key_exists("question_stem_help", $context)) ? (_twig_default_filter((isset($context["question_stem_help"]) ? $context["question_stem_help"] : $this->getContext($context, "question_stem_help")), "")) : (""));
        // line 61
        echo "            ";
        if ((isset($context["question_stem_help"]) ? $context["question_stem_help"] : $this->getContext($context, "question_stem_help"))) {
            echo "<div class=\"help-block\">";
            echo (isset($context["question_stem_help"]) ? $context["question_stem_help"] : $this->getContext($context, "question_stem_help"));
            echo "</div>";
        }
        // line 62
        echo "          </div>
        </div>

        ";
        // line 65
        $this->displayBlock('question_extra_fields', $context, $blocks);
        // line 66
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls \">
              <a href=\"javascript:;\" data-toggle=\"collapse\" data-role=\"advanced-collapse\" data-target=\"#advanced-collapse\" class=\"text-success collapsed\">&raquo; 显示/隐藏 高级选项 ...</a>
          </div>
        </div>
        
        <div id=\"advanced-collapse\" class=\"advanced-collapse collapse\">
          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-analysis-field\">解析</label></div>
            <div class=\"col-md-8 controls\">
                <textarea class=\"form-control\" id=\"question-analysis-field\" data-image-upload-url=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"analysis\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-score-field\">分值</label></div>
            <div class=\"col-md-4 controls\">
              <input class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), 2)) : (2)), "html", null, true);
        echo "\" type=\"text\" id=\"question-score-field\" name=\"score\" />
            </div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls\">
            ";
        // line 91
        $this->displayBlock('question_buttons', $context, $blocks);
        // line 97
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" class=\"btn btn-link\">返回</a>
          </div>
        </div>

        <input type=\"hidden\" name=\"submission\">
        <input type=\"hidden\" name=\"type\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"parentId\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div>
    
  </div>
</div>


";
    }

    // line 65
    public function block_question_extra_fields($context, array $blocks = array())
    {
    }

    // line 91
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 92
        echo "              ";
        if ( !$this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) {
            // line 93
            echo "                <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"continue\">保存并继续添加</button>
              ";
        }
        // line 95
        echo "              <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"submit\">保存</button>
            ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 95,  263 => 93,  260 => 92,  257 => 91,  252 => 65,  237 => 104,  233 => 103,  229 => 102,  220 => 97,  218 => 91,  208 => 84,  194 => 77,  181 => 66,  179 => 65,  174 => 62,  167 => 61,  165 => 60,  157 => 59,  152 => 57,  144 => 52,  138 => 48,  129 => 42,  123 => 38,  121 => 37,  116 => 35,  107 => 33,  100 => 29,  96 => 28,  92 => 27,  80 => 23,  72 => 21,  70 => 20,  66 => 19,  56 => 11,  54 => 10,  51 => 9,  48 => 8,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  11 => 1,);
    }
}
