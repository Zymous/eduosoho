<?php

/* TopxiaWebBundle:User:about.html.twig */
class __TwigTemplate_3d3726fa111407f4a34885659725661c609b9d4e5891f6e84a5e65adeebcf608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"editor-text\">
\t ";
        // line 9
        if ($this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array())) {
            echo $this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array());
        } else {
            echo "<div class=\"empty\">暂无介绍</div>";
        }
        // line 10
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
