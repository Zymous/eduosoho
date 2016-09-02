<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_df95666c27cb37f73663abbb24f207d065ac6067a29d591fa172dc2a56ddd451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 7
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 9
        echo "<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">登录帐号</a>
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">注册帐号</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

      ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 20
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">帐号</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required placeholder='邮箱/手机/用户名' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">密码</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='密码'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">登录</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">还没有注册帐号？</span>
      <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">立即注册</a>
    </div>

    ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 56
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 58
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 63
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  134 => 58,  130 => 56,  128 => 55,  122 => 52,  116 => 49,  109 => 45,  105 => 44,  82 => 24,  74 => 20,  68 => 18,  66 => 17,  61 => 15,  55 => 12,  50 => 9,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
