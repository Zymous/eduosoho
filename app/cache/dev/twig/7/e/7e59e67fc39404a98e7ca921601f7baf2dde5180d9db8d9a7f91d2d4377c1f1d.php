<?php

/* TopxiaWebBundle:EsBar:LeftList/study-center.html.twig */
class __TwigTemplate_7e59e67fc39404a98e7ca921601f7baf2dde5180d9db8d9a7f91d2d4377c1f1d extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            $context["recentLiveLessons"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveLessons", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\">学<br>习<br>中<br>心
      ";
            // line 5
            if ((isset($context["recentLiveLessons"]) ? $context["recentLiveLessons"] : $this->getContext($context, "recentLiveLessons"))) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\">学<br>习<br>中<br>心</a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  34 => 8,  30 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
