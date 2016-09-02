<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\test-paper.tpl.html.twig */
class __TwigTemplate_989550f2ad0b6104b68702f1e038bb86f7c92254dfc02e204ada443034b0744f extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
        ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array());
        // line 8
        echo "          ";
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "perusal")) {
            // line 9
            echo "            【试卷已完成】 
          ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "read")) {
            // line 11
            echo "            【试卷已批阅】
          ";
        }
        // line 13
        echo "           <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
        echo "' target='_blank'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
        echo "</a> 
            ";
        // line 14
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "perusal")) {
            // line 15
            echo "             刚刚完成了
          ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "read")) {
            // line 17
            echo "            刚刚批阅了
          ";
        }
        // line 19
        echo "          ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array()), "html", null, true);
        echo " ，
          ";
        // line 20
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "perusal")) {
            // line 21
            echo "            <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_teacher_check", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()))), "html", null, true);
            echo "' target='_blank'>
             请点击批阅 
          ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "read")) {
            // line 24
            echo "            <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()))), "html", null, true);
            echo "' target='_blank'>
            请点击查看结果
          ";
        }
        // line 27
        echo "          </a>
    </div>
    <div class=\"notification-footer\">
     ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>

";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\test-paper.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  81 => 27,  74 => 24,  72 => 23,  66 => 21,  64 => 20,  59 => 19,  55 => 17,  53 => 16,  50 => 15,  48 => 14,  41 => 13,  37 => 11,  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
