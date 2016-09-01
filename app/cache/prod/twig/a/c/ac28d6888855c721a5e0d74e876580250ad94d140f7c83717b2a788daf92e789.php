<?php

/* TopxiaWebBundle:Message:send-message-modal.html.twig */
class __TwigTemplate_ac28d6888855c721a5e0d74e876580250ad94d140f7c83717b2a788daf92e789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Message:send-message-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 36
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "发送私信";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => (isset($context["userId"]) ? $context["userId"] : null))), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "receiver", array()), 'label', array("label" => "收件人"));
        echo "</div>
      <div class=\"col-md-8 controls\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "receiver", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 1, "data-url" => $this->env->getExtension('routing')->getPath("message_check_receiver"))));
        echo "
      </div> 
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label', array("label" => "内容"));
        echo "</div>
      <div class=\"col-md-8 controls\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        <button class=\"btn btn-primary\" type=\"submit\">发送</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  <script> app.load('user/message-send-modal'); </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:send-message-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  77 => 25,  68 => 19,  63 => 17,  55 => 12,  50 => 10,  46 => 8,  41 => 6,  38 => 5,  32 => 3,  28 => 1,  26 => 36,  11 => 1,);
    }
}
