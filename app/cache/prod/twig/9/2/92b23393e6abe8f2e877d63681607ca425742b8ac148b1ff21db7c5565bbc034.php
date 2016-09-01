<?php

/* TopxiaWebBundle:EsBar:index.html.twig */
class __TwigTemplate_92b23393e6abe8f2e877d63681607ca425742b8ac148b1ff21db7c5565bbc034 extends Twig_Template
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
        echo "<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:EsBar:left-list.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 5)->display($context);
        // line 6
        echo "
  <!-- 列表内容 -->
  ";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 9
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 11
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 11)->display($context);
            // line 12
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 21
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 21)->display($context);
            // line 22
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 26
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 26)->display($context);
            // line 27
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 39
            echo "
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/consult.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 42)->display($context);
        // line 43
        echo "
</div>

";
        // line 46
        $this->env->getExtension('topxia_web_twig')->loadScript("es-bar/index");
        // line 47
        $this->env->getExtension('topxia_web_twig')->loadScript("notification/notification");
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  84 => 47,  82 => 46,  77 => 43,  75 => 42,  72 => 41,  68 => 39,  63 => 27,  61 => 26,  55 => 22,  53 => 21,  47 => 17,  45 => 16,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
