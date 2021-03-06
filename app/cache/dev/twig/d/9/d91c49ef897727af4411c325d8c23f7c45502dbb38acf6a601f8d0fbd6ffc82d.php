<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig */
class __TwigTemplate_d91c49ef897727af4411c325d8c23f7c45502dbb38acf6a601f8d0fbd6ffc82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 1);
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
        $context["layoutClass"] = "before";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</li>
  </ol>
  ";
        // line 13
        if (((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")) && $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "locked", array()))) {
            // line 14
            echo "  <div class=\"alert alert-warning\">
    您的退款申请已提交，请等待管理员的处理，退款期间将不能学习课程。
    <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
  </div>
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
  ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "picture", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), 1 => (isset($context["previewLesson"]) ? $context["previewLesson"] : $this->getContext($context, "previewLesson"))), "method"), "html", null, true);
        echo "

  ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "info", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), 1 => (isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus"))), "method"), "html", null, true);
        echo "
  <div class=\"course-operation clearfix\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))), "method"), "html", null, true);
        echo "
    <ul class=\"course-data clearfix ";
        // line 28
        if (((isset($context["courseVip"]) ? $context["courseVip"] : $this->getContext($context, "courseVip")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == "0"))) {
            echo "active";
        }
        echo "\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : $this->getContext($context, "hasFavorited"))), "method"), "html", null, true);
        echo "
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))), "method"), "html", null, true);
        echo "
      ";
        // line 31
        if (((isset($context["courseVip"]) ? $context["courseVip"] : $this->getContext($context, "courseVip")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == "0"))) {
            // line 32
            echo "        <li class=\"hidden-xs color-warning icon-vip\" title=\"会员课程\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 32)->display($context);
            echo "\">
          <i class=\"es-icon es-icon-crown\"></i><br>
          ";
            // line 34
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 34)->display(array_merge($context, array("userVipStatus" => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus")), "level" => (isset($context["courseVip"]) ? $context["courseVip"] : $this->getContext($context, "courseVip")))));
            // line 35
            echo "        </li>
      ";
        }
        // line 37
        echo "    </ul>
    <div class=\"buy\">
      ";
        // line 39
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "")) : ("")) == "classroom")) {
            // line 40
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:classroomInfo", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))));
            echo "
      ";
        } else {
            // line 42
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 42)->display($context);
            // line 43
            echo "      ";
        }
        // line 44
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  140 => 43,  137 => 42,  131 => 40,  129 => 39,  125 => 37,  121 => 35,  119 => 34,  113 => 32,  111 => 31,  107 => 30,  103 => 29,  97 => 28,  93 => 27,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  69 => 16,  65 => 14,  63 => 13,  57 => 11,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
