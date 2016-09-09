<?php

/* TopxiaAdminBundle:Group:table-tr.html.twig */
class __TwigTemplate_132f13a2368f0c123df49a00175a94d703b25113ac6848c17e72980fbc45f1ac extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Group:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"group-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    ";
        // line 9
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == "close")) {
            // line 10
            echo "          <label class=\"label label-danger\">关闭</label>
    ";
        }
        // line 12
        echo "    </td>

    <td>
    <a target=\"_blank\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : $this->getContext($context, "owners")), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "ownerId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : $this->getContext($context, "owners")), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "ownerId", array()), array(), "array"), "nickname", array()), "html", null, true);
        echo "</a>
    </td>

    <td>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "memberNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "threadNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "postNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 32
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == "open")) {
            // line 33
            echo "    开启
    ";
        } else {
            // line 35
            echo "    关闭
    ";
        }
        // line 37
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 查看小组</a></li>

       ";
        // line 51
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()) == "open")) {
            // line 52
            echo "       <li><a href=\"javascript:\" class=\"close-group\" title=\"关闭小组(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_close", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭小组</a></li>

       ";
        } else {
            // line 55
            echo "       <li><a href=\"javascript:\" class=\"open-group\" title=\"开启小组(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_open", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>开启小组</a></li>

       ";
        }
        // line 58
        echo "
       <li  ><a href=\"javascript:\" class=\"transfer-group\" data-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_transfer", array("groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-refresh\"></span> 转移小组</a></li>
       
    </ul>
  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  132 => 58,  123 => 55,  114 => 52,  112 => 51,  107 => 49,  93 => 37,  89 => 35,  85 => 33,  83 => 32,  76 => 28,  69 => 24,  62 => 20,  55 => 16,  51 => 15,  46 => 12,  42 => 10,  40 => 9,  33 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }
}
