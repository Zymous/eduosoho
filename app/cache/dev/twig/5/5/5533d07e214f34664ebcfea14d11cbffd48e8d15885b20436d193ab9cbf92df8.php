<?php

/* TopxiaWebBundle:Course:related-courses-block.html.twig */
class __TwigTemplate_5533d07e214f34664ebcfea14d11cbffd48e8d15885b20436d193ab9cbf92df8 extends Twig_Template
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
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 2
            $this->env->getExtension('topxia_web_twig')->loadScript("course/related-courses-block");
            // line 3
            echo "<div class=\"panel panel-default hidden-xs\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-explore\"></i>相关课程</h3>
  </div>
  <div class=\"panel-body\">
    <div class=\"course-list no-shadow no-margin\">
      <div class=\"row\">
        ";
            // line 10
            $context["key"] = 0;
            // line 11
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 12
                echo "          ";
                if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) < 3) && ($this->getAttribute((isset($context["currentCourse"]) ? $context["currentCourse"] : $this->getContext($context, "currentCourse")), "id", array()) != $this->getAttribute($context["course"], "id", array())))) {
                    // line 13
                    echo "          ";
                    $context["key"] = ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1);
                    // line 14
                    echo "          <div class=\"col-lg-4 col-md-6 col-sm-6\">
            ";
                    // line 15
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:related-courses-block.html.twig", 15)->display($context);
                    // line 16
                    echo "          </div>
          ";
                }
                // line 18
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:related-courses-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  67 => 18,  63 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  34 => 11,  32 => 10,  23 => 3,  21 => 2,  19 => 1,);
    }
}
