<?php

/* TopxiaWebBundle:Teacher:teacher-item.html.twig */
class __TwigTemplate_ca692266f5a5204031d781a9cc4161247a5148b33c38218891f09e1f9e585fc0 extends Twig_Template
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
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        暂无头衔
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        暂无简介
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) || ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">关注</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\">私信</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  100 => 29,  92 => 28,  77 => 27,  75 => 26,  71 => 24,  67 => 22,  61 => 20,  59 => 19,  53 => 15,  49 => 13,  43 => 11,  41 => 10,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
