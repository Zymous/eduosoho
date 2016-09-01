<?php

/* TopxiaWebBundle:Thread:post-interaction.html.twig */
class __TwigTemplate_c6c383f378e6d37bd1df3f5025b551f1778507dd1d7754954243730b15d7e8e7 extends Twig_Template
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
        echo "<div class=\"thread-post-interaction\">
  <a href=\"javascript:;\" class=\"js-post-up interaction text-muted\"
    data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post_up", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\">
    <span class=\"glyphicon glyphicon-thumbs-up\"></span> (<span class=\"post-up-num\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ups", array()), "html", null, true);
        echo "</span>)
  </a>
  <a href=\"javascript:;\" class=\"js-reply interaction text-muted\"><span class=\"glyphicon glyphicon-comment hide\"></span>
    回复
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "parentId", array())) {
            // line 9
            echo "      <span class=\"subposts-num-wrap ";
            if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
                echo "hide";
            }
            echo "\">(<span class=\"subposts-num\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()), "html", null, true);
            echo "</span>)</span>
    ";
        }
        // line 11
        echo "  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-interaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  36 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
