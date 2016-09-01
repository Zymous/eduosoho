<?php

/* TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig */
class __TwigTemplate_3a32102432374ba4b3bc870560ff785766dcb377b4fc292053f9d352339c188d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig", 1);
        $this->blocks = array(
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["esBarMenu"] = (isset($context["status"]) ? $context["status"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myPractice($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-line gray small\">
  <h5><span>考试</span></h5>
  <div class=\"line\"></div>
</div>

<ul class=\"list-unstyled\">
  ";
        // line 10
        if ((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null)) {
            // line 11
            echo "    ";
            $context["testCount"] = 10;
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["testPaperResult"]) {
                // line 13
                echo "      ";
                $context["testCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 14
                echo "      <li><i class=\"es-icon es-icon-chevronright\"></i><a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute($context["testPaperResult"], "id", array()))), "html", null, true);
                echo "\" class=\"link-light\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testPaperResult"], "paperName", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testPaperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
            if (((isset($context["testCount"]) ? $context["testCount"] : null) >= 10)) {
                // line 17
                echo "      <li class=\"text-center\">
        <a class=\"link-light\" href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("my_quiz");
                echo "\" target=\"_blank\">
          更多<i class=\"es-icon es-icon-angledoubleright\"></i>
        </a>
      </li>
    ";
            }
            // line 23
            echo "  ";
        } else {
            // line 24
            echo "    <li class=\"empty\">暂无考试</li>
  ";
        }
        // line 26
        echo "</ul>

<div class=\"text-line gray small\">
  <h5><span>作业</span></h5>
  <div class=\"line\"></div>
</div>

<ul class=\"list-unstyled\">
";
        // line 34
        if ((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null)) {
            // line 35
            echo "  ";
            $context["homeworkCount"] = 10;
            // line 36
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["homeworkResult"]) {
                // line 37
                echo "    ";
                $context["homeworkCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 38
                echo "    ";
                $context["lesson"] = $this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["homeworkResult"], "lessonId", array()), array(), "array");
                // line 39
                echo "    ";
                $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["homeworkResult"], "courseId", array()), array(), "array");
                // line 40
                echo "    ";
                $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()));
                // line 41
                echo "    <li><i class=\"es-icon es-icon-chevronright\"></i><a target=\"_blank\" class=\"link-light\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_result", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => $this->getAttribute($context["homeworkResult"], "homeworkId", array()), "resultId" => $this->getAttribute($context["homeworkResult"], "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\">《";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "》第 ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                echo "课时</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homeworkResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  ";
            if (((isset($context["homeworkCount"]) ? $context["homeworkCount"] : null) >= 10)) {
                // line 44
                echo "    <li class=\"text-center\">
      <a class=\"link-light\" href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("my_homework_list");
                echo "\" target=\"_blank\">
        更多<i class=\"es-icon es-icon-angledoubleright\"></i>
      </a>
    </li>
  ";
            }
        } else {
            // line 51
            echo "  <li class=\"empty\">暂无作业</li>
";
        }
        // line 53
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 53,  189 => 51,  180 => 45,  177 => 44,  174 => 43,  153 => 41,  150 => 40,  147 => 39,  144 => 38,  141 => 37,  123 => 36,  120 => 35,  118 => 34,  108 => 26,  104 => 24,  101 => 23,  93 => 18,  90 => 17,  87 => 16,  68 => 14,  65 => 13,  47 => 12,  44 => 11,  42 => 10,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
