<?php

/* TopxiaAdminBundle:User:create-modal.html.twig */
class __TwigTemplate_d145e62a5a609f09474526f901ff311b68d7dd61fc5bbae8cd594483c42e1573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:create-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "添加新用户";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user_create");
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"email\">邮箱地址</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"email\" data-url=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_user_create_email_check");
        echo "\" name=\"email\" class=\"form-control\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"nickname\">用户名</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"nickname\" name=\"nickname\" data-url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_user_create_nickname_check");
        echo "\" class=\"form-control\" >
    </div>
  </div>

   <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"password\">密码</label>
    </div>
      <div class=\"col-md-7 controls\">
        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
      <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
      <label for=\"confirmPassword\">确认密码</label>
    </div>
      <div class=\"col-md-7 controls\">
        <input type=\"password\" id=\"confirmPassword\" name=\"confirmPassword\" class=\"form-control\">
        <p class=\"help-block\">再输入一次密码</p>
      </div>
    </div>

<div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"roles\">用户权限</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"checkbox\" value=\"ROLE_TEACHER\" name=\"roles[]\"> 教师  
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "  <button id=\"user-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-create-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/create-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  111 => 62,  103 => 57,  67 => 24,  55 => 15,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
