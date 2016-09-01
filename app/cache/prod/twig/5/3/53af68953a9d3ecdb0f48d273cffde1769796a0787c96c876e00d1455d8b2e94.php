<?php

/* TopxiaAdminBundle:System:Report/dir-permission.html.twig */
class __TwigTemplate_53af68953a9d3ecdb0f48d273cffde1769796a0787c96c876e00d1455d8b2e94 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errorPaths"]) ? $context["errorPaths"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  <tr>
    <td>";
            // line 3
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "</td>
    <td>
      <span class=\"text-danger\">X 不可写</span>
    </td>
    <td>可写</td>
    
  </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "<tr>
  <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">文件目录权限正常</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:Report/dir-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  27 => 3,  24 => 2,  19 => 1,);
    }
}
