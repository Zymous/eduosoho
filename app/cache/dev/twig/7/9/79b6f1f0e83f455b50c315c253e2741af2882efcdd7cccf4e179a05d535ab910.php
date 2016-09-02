<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\start_learn_lesson.tpl.html.twig */
class __TwigTemplate_79b6f1f0e83f455b50c315c253e2741af2882efcdd7cccf4e179a05d535ab910 extends Twig_Template
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
            echo "  开始学习课时 <a class=\"link-dark\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "course", array()), "id", array()))), "html", null, true);
            echo "\" title=\"来自《";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "course", array()), "title", array()), "html", null, true);
            echo "》\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : $this->getContext($context, "props")), "lesson", array()), "title", array()), 15);
            echo "</a>
";
        } elseif ((        // line 5
(isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "full")) {
            // line 6
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\start_learn_lesson.tpl.html.twig";
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
