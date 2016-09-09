<?php

/* TopxiaWebBundle:Message:item.html.twig */
class __TwigTemplate_66d8834b849deb3757462ffbbf8f0e93e3415fa24f1ade60ddcb6d0c388f8dc1 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Message:item.html.twig", 1);
        // line 2
        echo "<li class=\"media message-me\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">

  ";
        // line 4
        echo $context["web_macro"]->getuser_avatar($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pull-right");
        echo "

  <div class=\"media-body\">
    <div class=\"popover left\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
               <strong>我：</strong> 
              ";
        // line 12
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content", array());
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdTime", array())), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "id", array()), "messageId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()))), "html", null, true);
        echo "\">删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  44 => 15,  38 => 12,  27 => 4,  21 => 2,  19 => 1,);
    }
}
