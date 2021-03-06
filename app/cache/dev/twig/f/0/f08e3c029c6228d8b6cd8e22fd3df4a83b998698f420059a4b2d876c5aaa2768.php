<?php

/* TopxiaWebBundle:MyThread:questions.html.twig */
class __TwigTemplate_f08e3c029c6228d8b6cd8e22fd3df4a83b998698f420059a4b2d876c5aaa2768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyThread:questions.html.twig", 1);
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
        $context["side_nav"] = "my-questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的问答 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "

<div class=\"panel panel-default panel-col\">
\t

  <div class=\"panel-heading\">我的问答
  </div>

  <div class=\"panel-body\">
  \t
    ";
        // line 18
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 19
            echo "\t    ";
            $this->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig", "TopxiaWebBundle:MyThread:questions.html.twig", 19)->display(array_merge($context, array("type" => "question")));
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "      <div class=\"empty\">暂无提问的记录</div>
    ";
        }
        // line 23
        echo "
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
