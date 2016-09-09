<?php

/* TopxiaWebBundle:Message/Template:message-item-text.tpl.html.twig */
class __TwigTemplate_6f306d23bef9156e90997e07c7d2dc4c5ca33617f0bb3bc3121565cd08a83fc1 extends Twig_Template
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
        $context["messageFrom"] = ((($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) ? ("me") : ("she"));
        // line 2
        echo "<li class=\"media message-";
        echo twig_escape_filter($this->env, (isset($context["messageFrom"]) ? $context["messageFrom"] : $this->getContext($context, "messageFrom")), "html", null, true);
        echo "\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">
  ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_avatar", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdUser", array()), 1 => (((((isset($context["messageFrom"]) ? $context["messageFrom"] : $this->getContext($context, "messageFrom")) == "me")) ? ("pull-right") : ("pull-left")) . " media-object"), 2 => "", 3 => false), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <div class=\"popover ";
        // line 5
        if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
          ";
        // line 9
        if (((isset($context["messageFrom"]) ? $context["messageFrom"] : $this->getContext($context, "messageFrom")) == "me")) {
            // line 10
            echo "            <strong>我：</strong> 
          ";
        } else {
            // line 12
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdUser", array())), "method"), "html", null, true);
            echo "：</strong> 
          ";
        }
        // line 14
        echo "          ";
        echo nl2br($this->env->getExtension('topxia_web_twig')->spaceToNbsp($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content", array())));
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdTime", array())), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "id", array()), "messageId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()))), "html", null, true);
        echo "\" 
            >删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message/Template:message-item-text.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  63 => 17,  56 => 14,  50 => 12,  46 => 10,  44 => 9,  33 => 5,  28 => 3,  21 => 2,  19 => 1,);
    }
}
