<?php

/* ClassroomBundle:Classroom:teachers-block.html.twig */
class __TwigTemplate_529f8af8d21f554fbdf2912f463f8a8654397b5fedf5f49902521f1034d7a590 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:teachers-block.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/teachers");
        // line 4
        echo "
<div class=\"panel panel-default\" id=\"class-teacher-column\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> 
      <i class=\"es-icon es-icon-assignmentind\"></i>班主任
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 12
        if ((isset($context["headTeacher"]) ? $context["headTeacher"] : null)) {
            // line 13
            echo "    <div class=\"media media-default\">
      <div class=\"media-left\">
        ";
            // line 15
            echo $context["web_macro"]->getuser_avatar((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "", "avatar-md");
            echo "
      </div>
      
      <div class=\"media-body\">
        <div class=\"title\">
          ";
            // line 20
            echo $context["web_macro"]->getuser_link((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "link-light");
            echo "
        </div>
        ";
            // line 22
            if ((($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "")) : (""))) {
                // line 23
                echo "          <div class=\"content\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 25
                echo "          <div class=\"content\">还没有头衔</div>
        ";
            }
            // line 27
            echo "      </div>
    </div>
    ";
        } else {
            // line 30
            echo "      <div class=\"empty\">该";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "尚未设置班主任</div>
    ";
        }
        // line 32
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  72 => 30,  67 => 27,  63 => 25,  57 => 23,  55 => 22,  50 => 20,  42 => 15,  38 => 13,  36 => 12,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
