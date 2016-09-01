<?php

/* TopxiaWebBundle:Settings:avatar-crop.html.twig */
class __TwigTemplate_71102ccea455e8aeedc68e6889ffa6f7c947480ec6fdf65cfc8bc72edc5940df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:avatar-crop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "avatar";
        // line 6
        $context["script_controller"] = "settings/avatar-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "头像图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    头像设置
  </div>

  <div class=\"panel-body\">
    <form id=\"avatar-crop-form\" method=\"post\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" 
          id=\"avatar-crop\" 
          width=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a class=\"btn btn-fat btn-primary\" 
          id=\"upload-avatar-btn\" 
          data-url=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("settings_avatar_crop");
        echo "\"
          data-goto-url=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"
          >保存</a>
          <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
        </div>
      </div>

    </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  80 => 30,  62 => 21,  57 => 19,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
