<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_16851d730dda371668daefda25d5ffbd15e1c621cb319193ad749065ef006a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "


  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "名称\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
        // line 19
        if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo"))) {
            // line 20
            echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>班级编号</th>
      <th width=\"40%\">";
            // line 24
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "名称</th>
      <th>课程数</th>
      <th>学员数</th>
      <th>价格</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 35
                echo "      ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 36
                echo "      ";
                $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 36)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                // line 37
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 44
            echo "    <div class=\"empty\">暂无";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "信息!</div>
  ";
        }
        // line 46
        echo "  <div class=\"pull-right\">
 ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  127 => 46,  121 => 44,  114 => 39,  99 => 37,  96 => 36,  93 => 35,  76 => 34,  63 => 24,  57 => 20,  55 => 19,  44 => 13,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
