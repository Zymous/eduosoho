<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\become_student.tpl.html.twig */
class __TwigTemplate_0e66b41fedea1e29f92860789b87d8690792afb003b75c8935a95cb61175dbe5 extends Twig_Template
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
        $context["props"] = $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "properties", array());
        // line 2
        echo "
";
        // line 3
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "simple")) {
            // line 4
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "objectType", array()) == "course")) {
                // line 5
                echo "\t\t加入课程 <a  class=\"link-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "course", array()), "id", array()))), "html", null, true);
                echo "\" title=\"来自《";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "course", array()), "title", array()), "html", null, true);
                echo "》\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "course", array()), "title", array()), 15);
                echo "</a>
\t";
            } else {
                // line 7
                echo "\t\t加入";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo " <a  class=\"link-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "classroom", array()), "id", array()))), "html", null, true);
                echo "\" title=\"来自《";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "classroom", array()), "title", array()), "html", null, true);
                echo "》\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "classroom", array()), "title", array()), 15);
                echo "</a>
\t";
            }
            // line 9
            echo "  
";
        } elseif ((        // line 10
(isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "full")) {
            // line 11
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "objectType", array()) == "course")) {
                // line 12
                echo "\t\t
\t";
            } else {
                // line 14
                echo "\t\t
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\become_student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 12,  56 => 11,  54 => 10,  51 => 9,  39 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
