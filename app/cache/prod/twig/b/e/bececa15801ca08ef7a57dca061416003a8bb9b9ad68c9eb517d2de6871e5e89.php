<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\learned_lesson.tpl.html.twig */
class __TwigTemplate_bececa15801ca08ef7a57dca061416003a8bb9b9ad68c9eb517d2de6871e5e89 extends Twig_Template
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
        $context["props"] = $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "properties", array());
        // line 2
        echo "
";
        // line 3
        if (((isset($context["mode"]) ? $context["mode"] : null) == "simple")) {
            // line 4
            echo "  学完了课时 <a class=\"link-dark\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "id", array()))), "html", null, true);
            echo "\" title=\"来自《";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "title", array()), "html", null, true);
            echo "》\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "lesson", array()), "title", array()), 15);
            echo "</a>
";
        } elseif ((        // line 5
(isset($context["mode"]) ? $context["mode"] : null) == "full")) {
            // line 6
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\learned_lesson.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
