<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig */
class __TwigTemplate_9de488e7447a3c60f93f43c50ececceec5c1e4038e3b2a40d74177225cd59938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "after";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course/common"), "html", null, true);
        echo "

  <div class=\"course-header-top clearfix\">

    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "picture", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "info", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["member"]) ? $context["member"] : null), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
        echo "

    <div class=\"course-operation\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      <ul class=\"course-data clearfix ";
        // line 26
        if ( !(( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course"))) {
            echo " two-col ";
        }
        echo "\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if ((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course"))) {
            // line 30
            echo "          <li>
            ";
            // line 31
            if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array())) {
                // line 32
                echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\">
                <p><i class=\"es-icon es-icon-exit\"></i><p>
                <p>退出</p>
              </a>
            ";
            } else {
                // line 37
                echo "              <a id=\"exit-course-learning\" class=\"course-exit-btn\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"  data-goto=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) != "student")) {
                    echo " disabled ";
                }
                echo ">
                <p><i class=\"es-icon es-icon-exit\"></i><p>
                <p>退出</p>
              </a>
            ";
            }
            // line 42
            echo "          </li>
        ";
        } elseif (($this->getAttribute(        // line 43
(isset($context["member"]) ? $context["member"] : null), "joinedType", array(), "array") == "groupSell")) {
            // line 44
            echo "          <div class=\"last\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"组合购买课程不能退出\">
          <a href=\"javascript:;\"> <i class=\"hz-icon icon-exit\"></i>退出</a>
          </div>
        ";
        }
        // line 48
        echo "      </ul>
    </div>
  </div>

  <div class=\"progress progress-sm\">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"course-header-bottom clearfix\">
    <span class=\"pull-left\">完成课时： ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "number", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "total", array()), "html", null, true);
        echo "</span>
    ";
        // line 59
        if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null)) {
            // line 60
            echo "      <a class=\"btn btn-lg btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">继续学习</a>
      <span class=\"next-class hidden-xs\">下一课时：<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "title", array()), "html", null, true);
            echo "</a></span>
    ";
        }
        // line 63
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 63,  179 => 61,  172 => 60,  170 => 59,  164 => 58,  154 => 53,  147 => 48,  141 => 44,  139 => 43,  136 => 42,  121 => 37,  112 => 32,  110 => 31,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  91 => 26,  87 => 25,  81 => 22,  76 => 20,  68 => 16,  65 => 15,  57 => 11,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
