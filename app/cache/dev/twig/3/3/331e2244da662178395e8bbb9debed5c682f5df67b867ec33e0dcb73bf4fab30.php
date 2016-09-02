<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\thread.tpl.html.twig */
class __TwigTemplate_331e2244da662178395e8bbb9debed5c682f5df67b867ec33e0dcb73bf4fab30 extends Twig_Template
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
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadUserId", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadUserNickname", array()), "html", null, true);
        echo "</a>
      在课程 <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseId", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getPurifyHtml($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseTitle", array())), "html", null, true);
        echo "</a>
      发表了";
        // line 10
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadType", array()) == "question")) {
            echo "问题";
        } else {
            echo "话题";
        }
        // line 11
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
        echo "\"  target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getPurifyHtml($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadTitle", array())), "html", null, true);
        echo "</a>。
    </div>
    <div class=\"notification-footer\">
     ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\thread.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  48 => 11,  42 => 10,  36 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
