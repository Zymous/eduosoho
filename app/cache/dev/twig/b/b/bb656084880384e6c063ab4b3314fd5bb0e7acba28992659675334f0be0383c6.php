<?php

/* TopxiaWebBundle:Category:explore-nav.html.twig */
class __TwigTemplate_bb656084880384e6c063ab4b3314fd5bb0e7acba28992659675334f0be0383c6 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("category/nav");
        // line 2
        $context["nextCode"] = "";
        // line 3
        echo "<div class=\"es-tabs\">

  <div class=\"tab-header\">
    <ul class=\"clearfix\">
      <li class=\"";
        // line 7
        if (((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")) == "")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), array("category" => "", "fliter" => (isset($context["fliter"]) ? $context["fliter"] : $this->getContext($context, "fliter")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")))), "html", null, true);
        echo "\">全部</a></li>
      ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rootCategories"]) ? $context["rootCategories"] : $this->getContext($context, "rootCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cateogory"]) {
            // line 9
            echo "        <li class=\"";
            if (twig_in_filter($this->getAttribute($context["cateogory"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : $this->getContext($context, "activeIds")))) {
                $context["nextCode"] = $this->getAttribute($context["cateogory"], "code", array());
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), array("category" => $this->getAttribute($context["cateogory"], "code", array()), "fliter" => (isset($context["fliter"]) ? $context["fliter"] : $this->getContext($context, "fliter")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cateogory"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
  </div>

  
  ";
        // line 15
        if ((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) {
            // line 16
            echo "    <div class=\"tab-body\">
      ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["l"] => $context["cs"]) {
                if ($context["cs"]) {
                    // line 18
                    echo "        <ul class=\"clearfix\">
          ";
                    // line 19
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["cs"]);
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 20
                        echo "            ";
                        if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                            // line 21
                            echo "              <li class=\"all\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), array("category" => (isset($context["nextCode"]) ? $context["nextCode"] : $this->getContext($context, "nextCode")), "fliter" => (isset($context["fliter"]) ? $context["fliter"] : $this->getContext($context, "fliter")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")))), "html", null, true);
                            echo "\">全部</a></li>
            ";
                        }
                        // line 23
                        echo "            <li class=\"";
                        if (twig_in_filter($this->getAttribute($context["c"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : $this->getContext($context, "activeIds")))) {
                            $context["nextCode"] = $this->getAttribute($context["c"], "code", array());
                            echo "active";
                        }
                        echo "\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), array("category" => $this->getAttribute($context["c"], "code", array()), "fliter" => (isset($context["fliter"]) ? $context["fliter"] : $this->getContext($context, "fliter")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                        echo "</a></li>
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "        </ul>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['l'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
  ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Category:explore-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 29,  134 => 27,  126 => 25,  102 => 23,  96 => 21,  93 => 20,  76 => 19,  73 => 18,  68 => 17,  65 => 16,  63 => 15,  57 => 11,  41 => 9,  37 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
