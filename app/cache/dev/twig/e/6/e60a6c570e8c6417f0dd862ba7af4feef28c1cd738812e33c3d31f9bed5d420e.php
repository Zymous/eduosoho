<?php

/* TopxiaWebBundle:MyWrongcollection:layout.html.twig */
class __TwigTemplate_e60a6c570e8c6417f0dd862ba7af4feef28c1cd738812e33c3d31f9bed5d420e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyWrongcollection:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-wrongcollection";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的错题本 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t我的错题本
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("myCollections", $context)) ? (_twig_default_filter((isset($context["myCollections"]) ? $context["myCollections"] : $this->getContext($context, "myCollections")), "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_wrongcollections");
        echo "\">错题纪录</a></li>
\t\t\t<li class=\"";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("statisticActive", $context)) ? (_twig_default_filter((isset($context["statisticActive"]) ? $context["statisticActive"] : $this->getContext($context, "statisticActive")), "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_wrongstatistics");
        echo "\">错题统计</a></li>
\t\t</ul>
\t\t<br>
\t\t";
        // line 18
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "\t\t
\t</div>
</div>
";
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  68 => 19,  66 => 18,  58 => 15,  52 => 14,  43 => 7,  40 => 6,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
