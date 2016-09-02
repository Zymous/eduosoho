<?php

/* TopxiaWebBundle:MyThread:discussions.html.twig */
class __TwigTemplate_fe7841c4ff745f6b2922928ef79f606bea7d3a63673d5df08b5ec0aa25eb44b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyThread:discussions.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-discussions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的话题 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的话题</div>

  <div class=\"panel-body\">
    ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:MyThread:tab.html.twig", "TopxiaWebBundle:MyThread:discussions.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 15
            echo "\t    ";
            $this->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig", "TopxiaWebBundle:MyThread:discussions.html.twig", 15)->display(array_merge($context, array("type" => "discussion")));
            // line 16
            echo "\t  ";
        } else {
            // line 17
            echo "\t    <div class=\"empty\">你还没有发表过话题</div>
\t  ";
        }
        // line 19
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
