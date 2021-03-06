<?php

/* TopxiaWebBundle:Article:recommend-articles-block.html.twig */
class __TwigTemplate_9ab6b5805fd65364f14dd5bc62cd8ae98300035dc9d1a6b25bd8fe85614c45cf extends Twig_Template
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
        echo "<div class=\"panel panel-default recommend-article\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-language\"></i>推荐资讯
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 8
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 9
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 10
                echo "        <div class=\"media media-number\">
          <div class=\"media-left\">
            <span class=\"num\">";
                // line 12
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</span>
          </div>
          <div class=\"media-body\">
            <a class=\"link-dark\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["article"], "title", array()), 20);
                echo "</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      <div class=\"empty\">暂无推荐资讯</div>
    ";
        }
        // line 22
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:recommend-articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 20,  59 => 19,  45 => 15,  39 => 12,  35 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
