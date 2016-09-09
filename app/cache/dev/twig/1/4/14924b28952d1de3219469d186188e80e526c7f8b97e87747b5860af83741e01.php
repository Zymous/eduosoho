<?php

/* TopxiaWebBundle:User:layout.html.twig */
class __TwigTemplate_14924b28952d1de3219469d186188e80e526c7f8b97e87747b5860af83741e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:User:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["bodyClass"] = "userpage bg-blank";
        // line 8
        $context["pageNav"] = ((array_key_exists("pageNav", $context)) ? (_twig_default_filter((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")), null)) : (null));
        // line 10
        $context["script_controller"] = "user/user";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teach")) {
            echo "在教课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learn")) {
            echo "在学课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "favorited")) {
            echo "收藏的课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "group")) {
            echo "加入的小组";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "friend")) {
            echo "关注/粉丝";
            echo " - ";
        } else {
            echo "";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "的个人主页 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array()), "")) : ("")), 100);
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:User:headerBlock", array("user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "  <ul class=\"nav nav-tabs clearfix\">
    <li ";
        // line 18
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_about", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">个人介绍</a></li>
  \t";
        // line 19
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 20
            echo "\t    <li ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teach")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_teach", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">在教课程</a></li>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 24
            echo "      <li ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teaching")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_teaching_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">在教";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 26
        echo "    <li ";
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learn")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">在学课程</a></li>
    <li ";
        // line 27
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learning")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learning_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">在学";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a></li>

    
    <li ";
        // line 30
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "favorited")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_favorited", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">收藏课程</a></li>
    <li ";
        // line 31
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "group")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_group", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">加入小组</a></li>
    <li ";
        // line 32
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "friend")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">关注&nbsp;/&nbsp;粉丝</a></li>
  </ul>
  ";
        // line 34
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 34,  168 => 32,  160 => 31,  152 => 30,  140 => 27,  131 => 26,  119 => 24,  117 => 23,  114 => 22,  104 => 20,  102 => 19,  94 => 18,  91 => 17,  88 => 16,  81 => 13,  78 => 12,  72 => 6,  66 => 5,  40 => 3,  36 => 1,  34 => 10,  32 => 8,  30 => 7,  11 => 1,);
    }
}
