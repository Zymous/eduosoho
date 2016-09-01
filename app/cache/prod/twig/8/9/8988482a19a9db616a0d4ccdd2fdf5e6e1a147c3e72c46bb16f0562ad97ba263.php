<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_8988482a19a9db616a0d4ccdd2fdf5e6e1a147c3e72c46bb16f0562ad97ba263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["bodyClass"] = "course-dashboard-page";
        // line 11
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:keywords", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("courseAbout", $context)) ? (_twig_default_filter((isset($context["courseAbout"]) ? $context["courseAbout"] : null), "")) : ("")), "html", null, true);
    }

    // line 13
    public function block_top_content($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
  ";
        // line 19
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 20
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "  
  ";
        }
        // line 22
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Announcement:block", array("targetObject" => (isset($context["course"]) ? $context["course"] : null), "targetType" => "course")));
        echo "

      <section class=\"es-section\">
        ";
        // line 28
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 28)->display($context);
        // line 29
        echo "        ";
        $this->displayBlock('course_main', $context, $blocks);
        // line 30
        echo "      </section>
      ";
        // line 31
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 36
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 39
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 51
        echo "    </div>
  </div>
";
    }

    // line 29
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 31
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 33
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 35
        echo "      ";
    }

    // line 39
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 41
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 43
        echo "        ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
            // line 44
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 46
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:students", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 48
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 48)->display($context);
        // line 49
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 49,  173 => 48,  169 => 47,  164 => 46,  158 => 44,  155 => 43,  149 => 41,  146 => 40,  143 => 39,  139 => 35,  133 => 33,  130 => 32,  127 => 31,  122 => 29,  116 => 51,  114 => 39,  109 => 36,  107 => 31,  104 => 30,  101 => 29,  99 => 28,  93 => 25,  88 => 22,  82 => 20,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  64 => 13,  58 => 8,  51 => 6,  48 => 5,  40 => 3,  36 => 1,  34 => 11,  32 => 10,  11 => 1,);
    }
}
