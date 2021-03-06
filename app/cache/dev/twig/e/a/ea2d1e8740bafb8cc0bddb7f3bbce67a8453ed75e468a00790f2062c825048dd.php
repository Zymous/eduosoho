<?php

/* TopxiaWebBundle:Course/Note:course-note-nav.html.twig */
class __TwigTemplate_ea2d1e8740bafb8cc0bddb7f3bbce67a8453ed75e468a00790f2062c825048dd extends Twig_Template
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
        echo "<div class=\"note-filter nav-filter clearfix\">
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
      ";
        // line 4
        if (((($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "lessonId", array()), "")) : ("")) == "")) {
            // line 5
            echo "        全部课时
      ";
        } else {
            // line 6
            echo " 
        ";
            // line 7
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")), $this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "lessonId", array()), array(), "array"), "title", array(), "array"), 10);
            echo "
      ";
        }
        // line 9
        echo "       
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li class=\"";
        // line 13
        if (((($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "lessonId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "lessonId", array()), "")) : ("")) == "")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", twig_array_merge(twig_array_merge(array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())), (isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters"))), array("lessonId" => ""))), "html", null, true);
        echo "\">全部课时</a>
      </li>
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 17
            echo "        <li class=\"";
            if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "lessonId", array()) == $this->getAttribute($context["lesson"], "id", array()))) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", twig_array_merge(twig_array_merge(array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())), (isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters"))), array("lessonId" => $this->getAttribute($context["lesson"], "id", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["lesson"], "title", array()), 10);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
  </div>

  <ul class=\"nav nav-pills nav-pills-sm\">
    <li class=\"dropdown hidden-xs\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>排序：</span>
        ";
        // line 28
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "sort", array()) == "latest")) {
            // line 29
            echo "          最新笔记
        ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "sort", array()) == "likeNum")) {
            echo " 
          点赞最多
        ";
        }
        // line 33
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 36
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "sort", array()) == "latest")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", twig_array_merge(twig_array_merge(array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())), (isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters"))), array("sort" => "latest"))), "html", null, true);
        echo "\">最新笔记</a></li>
        <li class=\"";
        // line 37
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "sort", array()) == "likeNum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", twig_array_merge(twig_array_merge(array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())), (isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters"))), array("sort" => "likeNum"))), "html", null, true);
        echo "\">点赞最多</a></li>
      </ul>
    </li>
  </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Note:course-note-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  104 => 36,  99 => 33,  93 => 30,  90 => 29,  88 => 28,  79 => 21,  66 => 18,  59 => 17,  55 => 16,  50 => 14,  44 => 13,  38 => 9,  33 => 7,  30 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
