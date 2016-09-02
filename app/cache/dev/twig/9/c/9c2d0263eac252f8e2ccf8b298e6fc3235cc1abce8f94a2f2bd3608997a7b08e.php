<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\questionRemind.tpl.html.twig */
class __TwigTemplate_9c2d0263eac252f8e2ccf8b298e6fc3235cc1abce8f94a2f2bd3608997a7b08e extends Twig_Template
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
        echo "  \t  课程《";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseTitle", array()), "html", null, true);
        echo "》有新问题
  \t  <a href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
        echo "' target='_blank'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "questionTitle", array()), "html", null, true);
        echo "</a>，请及时回答。
    </div>
    <div class=\"notification-footer\">
     ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\questionRemind.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
