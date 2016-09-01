<?php

/* TopxiaWebBundle:Article/Part:detail-post-form.html.twig */
class __TwigTemplate_7e8ddf001c924912c5a14b2be59fb8d40587b4d2563678df5376c867ff1e543c extends Twig_Template
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
        echo "<form class=\"es-commet\" id=\"thread-post-form\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_post", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\">
  <div class=\"es-commet-header\">
    文章评论<span class=\"badge badge-primary\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "postNum", array()), "html", null, true);
        echo "</span>
  </div>
  <textarea class=\"form-control form-control-o\" rows=\"6\" placeholder=\"您的想法\" ";
        // line 5
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo "disabled";
        }
        echo " name=\"content\"></textarea>
  <div class=\"form-group clearfix\">
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a> 后发表看法";
        }
        // line 8
        echo "    <button type=\"submit\" class=\"btn btn-default pull-right ";
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo "disabled";
        }
        echo "\" data-loading-text=\"正在评论\">发表评论</button>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-post-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  43 => 8,  37 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }
}
