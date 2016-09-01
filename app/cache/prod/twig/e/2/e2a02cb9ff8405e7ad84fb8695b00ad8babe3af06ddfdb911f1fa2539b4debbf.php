<?php

/* TopxiaAdminBundle:System:live-course-setting.html.twig */
class __TwigTemplate_e2a02cb9ff8405e7ad84fb8695b00ad8babe3af06ddfdb911f1fa2539b4debbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:live-course-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_live_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >开启状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("live_course_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_course_enabled", array()));
        echo "
      </div>
    </div>
    
    ";
        // line 24
        if (((($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array()), 0)) : (0)) == 2)) {
            // line 25
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"logo\">直播LOGO</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"live-course-logo-container\">";
            // line 30
            if ((($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
        <a class=\"btn btn-default btn-sm\" id=\"live-course-logo-upload\"
        data-upload-token=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
        data-url=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_upload");
            echo "\"
        >上传</a>
        <button class=\"btn btn-default btn-sm\" id=\"live-course-logo-remove\" type=\"button\" data-url=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_remove");
            echo "\" ";
            if ( !(($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false))) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
        <p class=\"help-block\">
          <b>只针对直播新方案。</b><br>
          请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过100*23。</p>
        <input type=\"hidden\" name=\"live_logo\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    ";
        }
        // line 43
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>同时在线人数上限</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"mts text-muted\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo "人</div>
        <input class=\"form-control\" name=\"live_student_capacity\" type=\"hidden\" data-value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">扩充在线人数，请联系客服：0571-86819929</p>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:live-course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 62,  118 => 50,  114 => 49,  106 => 43,  99 => 39,  88 => 35,  83 => 33,  79 => 32,  70 => 30,  63 => 25,  61 => 24,  54 => 20,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
