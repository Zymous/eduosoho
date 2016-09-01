<?php

/* TopxiaWebBundle:Group:groups-ul.html.twig */
class __TwigTemplate_427901dce3adad30301d0c6a26c275953b65524598d1abaf6515d27b7a337f4a extends Twig_Template
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
        echo "<div class=\"row\">
  ";
        // line 2
        if ((isset($context["groups"]) ? $context["groups"] : null)) {
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 4
                echo "      ";
                if (($this->getAttribute($context["group"], "status", array()) == "open")) {
                    // line 5
                    echo "        <div class=\"media media-group col-md-3 col-sm-4\">
          <div class=\"media-left\">
            <a href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
              <img class=\"avatar-square-md\" src=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"link-light\" href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                ";
                    // line 14
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 10);
                    echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                    echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                    echo "</span>
            </div>
          </div>
        </div>    
      ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  ";
        } else {
            // line 26
            echo "    <div class=\"empty\">暂无小组信息！</div>
  ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  86 => 26,  83 => 25,  77 => 24,  69 => 19,  65 => 18,  58 => 14,  52 => 13,  42 => 8,  36 => 7,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
