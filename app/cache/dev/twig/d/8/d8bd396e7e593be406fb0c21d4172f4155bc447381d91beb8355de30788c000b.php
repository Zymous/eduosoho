<?php

/* TopxiaWebBundle:CourseTestpaperManage:index.html.twig */
class __TwigTemplate_d8bd396e7e593be406fb0c21d4172f4155bc447381d91beb8355de30788c000b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 7
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter((isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")), null)) : (null));
        // line 8
        $context["script_controller"] = "test-paper/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "试卷管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm pull-right mls\"><span class=\"glyphicon glyphicon-plus\"></span>创建试卷</a>
    试卷管理
  </div>

  <div class=\"panel-body \" id=\"quiz-table-container\">

  <table class=\"table table-striped table-hover\" id=\"quiz-table\">
  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <thead>
    <tr>
        <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
        <th width=\"38%\">名称</th>
        <th>状态</th>
        <th>题目统计</th>
        <th>时间限制</th>
        <th>更新人/时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testpapers"]) ? $context["testpapers"] : $this->getContext($context, "testpapers")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            // line 35
            echo "        ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["testpaper"], "updatedUserId", array()), array(), "array");
            // line 36
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:index.html.twig", 36)->display($context);
            // line 37
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">还没有试卷，请点击右上角按钮，<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">创建一个新试卷</a></div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"试卷\" data-url=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_deletes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">删除</button>
  </div>

  ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

  <div class=\"text-muted mtl\">提示：只有已发布的试卷才能被添加到课程中去，试卷一旦发布后将不能修改。</div>


  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  131 => 44,  125 => 40,  116 => 38,  103 => 37,  100 => 36,  97 => 35,  79 => 34,  63 => 21,  53 => 14,  48 => 11,  45 => 10,  38 => 4,  34 => 1,  32 => 8,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
