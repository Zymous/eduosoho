<?php

/* @theme/jianmo/block/middle_banner.template.html.twig */
class __TwigTemplate_8c9a2ab2b8a5e1774288bcd70b355a0475e1aa8e09ced5de91ece9aedd1e920b extends Twig_Template
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
        echo "<section class=\"introduction-section\">
  <div class=\"container hidden-xs\">
    <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        ";
            $context["icon"] = $this->getAttribute($context, ("icon" . $context["i"]), array(), "array");
            // line 6
            echo "        ";
            $context["title"] = $this->getAttribute($context, (("icon" . $context["i"]) . "title"), array(), "array");
            // line 7
            echo "        ";
            $context["introduction"] = $this->getAttribute($context, (("icon" . $context["i"]) . "introduction"), array(), "array");
            // line 8
            echo "        <div class=\"col-md-4 col-sm-4 col-xs-12 introduction-item\">
          <img class=\"img-responsive\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "src", array()), "")) : ("")), "html", null, true);
            echo "\">
          <h4>";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["title"]) ? $context["title"] : null), 0, array(), "array", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["title"]) ? $context["title"] : null), 0, array(), "array", false, true), "value", array()), "")) : ("")), "html", null, true);
            echo "</h4>
          <h5>";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["introduction"]) ? $context["introduction"] : null), 0, array(), "array", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["introduction"]) ? $context["introduction"] : null), 0, array(), "array", false, true), "value", array()), "")) : ("")), "html", null, true);
            echo "</h5>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/middle_banner.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  48 => 11,  44 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
