<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_d18f21f51e8817b7b811ee974e3dbe8c556c6e5e78046046c4e024e731705542 extends Twig_Template
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
        echo "<tbody>
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "\t\t<tr id=\"category-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
\t\t  <td>
\t\t    ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["category"], "depth", array()) - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
\t\t  </td>
\t\t  <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "weight", array()), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t    <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a>
\t\t    ";
            // line 11
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "depth", array()) > $this->getAttribute($context["category"], "depth", array()))) {
                // line 12
                echo "\t\t      <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()), "groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子分类</a>
\t\t    ";
            }
            // line 14
            echo "
\t\t  </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无分类记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 18,  68 => 14,  62 => 12,  60 => 11,  56 => 10,  51 => 8,  47 => 7,  33 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
