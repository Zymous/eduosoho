<?php

/* ClassroomBundle:Classroom:content-layout.html.twig */
class __TwigTemplate_ef53ec6c44ae836c09ec426f2a332f5fdfe2d05764ac9f86f43315d077daf392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "ClassroomBundle:Classroom:layout.html.twig")) : ("ClassroomBundle:Classroom:layout.html.twig")), "ClassroomBundle:Classroom:content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:keywords", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 9
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
        // line 11
        echo "
<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Announcement:block", array("targetObject" => (isset($context["classroom"]) ? $context["classroom"] : null), "targetType" => "classroom")));
        echo "


    <section class=\"es-section\">
      ";
        // line 19
        if (array_key_exists("nav", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
            echo "
      ";
        }
        // line 22
        echo "      <div class=\"class-detail-content\">
        ";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 30
        $this->displayBlock('side', $context, $blocks);
        // line 46
        echo "  </aside>

  ";
        // line 48
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter((isset($context["canLook"]) ? $context["canLook"] : null), false)) : (false))) {
            // line 49
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_canview", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 50
            $this->loadTemplate("ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 50)->display($context);
            // line 51
            echo "  ";
        }
        // line 52
        echo "</div>
";
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 24
        echo "        ";
    }

    // line 30
    public function block_side($context, array $blocks = array())
    {
        // line 31
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 34
        echo "
      ";
        // line 35
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true)) {
            // line 36
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:signPage", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 38
        echo "      
      ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:teachersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:latestMembersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:classroomStatusBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 43,  155 => 41,  150 => 39,  147 => 38,  141 => 36,  139 => 35,  136 => 34,  130 => 32,  127 => 31,  124 => 30,  120 => 24,  117 => 23,  112 => 52,  109 => 51,  107 => 50,  102 => 49,  100 => 48,  96 => 46,  94 => 30,  87 => 25,  85 => 23,  82 => 22,  76 => 20,  74 => 19,  67 => 15,  61 => 11,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  41 => 5,  34 => 3,  31 => 2,  22 => 1,);
    }
}
