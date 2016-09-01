<?php

/* TopxiaAdminBundle:System:wrong-collection.html.twig */
class __TwigTemplate_e9fd7993514a87e4481bd874ba91d175bf7d3f7e5420be5b00cf9dd0b18540ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:wrong-collection.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_wrong_collection";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"defaultCoursePicture\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->radios("coursePicture", array(1 => "自定义默认课程图片", 0 => "系统默认课程图片"), (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array()), 0)) : (0)));
        echo "
        <p>支持jpg、gif、png格式的图片，建议尺寸：480*270px.</p>
        ";
        // line 15
        $this->loadTemplate("TopxiaAdminBundle:System:default-course-picture.html.twig", "TopxiaAdminBundle:System:wrong-collection.html.twig", 15)->display($context);
        // line 16
        echo "      </div>
    </div>
  </fieldset>

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>
  <input type=\"hidden\" name=\"defaultCoursePicture\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array()), 0)) : (0)), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary mtl mll\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:wrong-collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  60 => 21,  53 => 16,  51 => 15,  46 => 13,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
