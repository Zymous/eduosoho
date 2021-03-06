<?php

/* TopxiaWebBundle:Course:normal-show.html.twig */
class __TwigTemplate_4d90ec129643f6f25141136b0318d44a410ddfeecbabd75d1df4ff785ea6b780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:normal-show.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "overview";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

\t\t";
        // line 11
        if ( !(isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
            // line 12
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          课程介绍
        </div>
        <div class=\"piece-body p-lg clearfix\">
          ";
            // line 17
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "about", array())) {
                // line 18
                echo "            ";
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "about", array());
                echo "
          ";
            } else {
                // line 20
                echo "            <div class=\"text-muted\">暂无课程简介</div>
          ";
            }
            // line 22
            echo "        </div>
      </div>

      ";
            // line 25
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "goals", array())) {
                // line 26
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            课程目标
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "goals", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                    // line 33
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "audiences", array())) {
                // line 43
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            适合人群
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 49
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "audiences", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                    // line 50
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 51
                    echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 58
            echo "
    ";
        } else {
            // line 60
            echo "\t\t\t<div class=\"es-piece\">
\t      <div class=\"piece-body\">
\t        ";
            // line 62
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "member" => (isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "previewUrl" => $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))))));
            echo "
\t        
\t      </div>
\t    </div>
    ";
        }
        // line 67
        echo "    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 67,  142 => 62,  138 => 60,  134 => 58,  128 => 54,  119 => 51,  116 => 50,  112 => 49,  104 => 43,  102 => 42,  99 => 41,  93 => 37,  84 => 34,  81 => 33,  77 => 32,  69 => 26,  67 => 25,  62 => 22,  58 => 20,  52 => 18,  50 => 17,  43 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
