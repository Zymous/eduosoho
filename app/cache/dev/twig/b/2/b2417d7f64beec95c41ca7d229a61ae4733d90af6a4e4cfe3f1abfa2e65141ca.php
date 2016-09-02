<?php

/* TopxiaWebBundle:CourseManage:picture-crop.html.twig */
class __TwigTemplate_b2417d7f64beec95c41ca7d229a61ae4733d90af6a4e4cfe3f1abfa2e65141ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:picture-crop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "picture";
        // line 6
        $context["script_controller"] = "course-manage/picture-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    课程图片
  </div>

  <div id=\"course-picture-crop-form\" class=\"panel-body\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : $this->getContext($context, "pictureUrl"))), "html", null, true);
        echo "\" 
          id=\"course-picture-crop\"
          width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : $this->getContext($context, "scaledSize")), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : $this->getContext($context, "scaledSize")), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : $this->getContext($context, "naturalSize")), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : $this->getContext($context, "naturalSize")), "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button class=\"btn btn-fat btn-primary\" 
          data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
          id=\"upload-picture-btn\">保存</button>
          <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
        </div>
      </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  78 => 28,  61 => 20,  56 => 18,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
