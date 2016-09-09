<?php

/* TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig */
class __TwigTemplate_77ce7be5a1c1786639b2864a236c412827a229c146e757f528cf8c40536caae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:layout.html.twig", "TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyWrongcollection:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "错题纪录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res"))) {
            // line 7
            echo "    <table class=\"table table-striped table-hover\">
    \t<tbody>
    \t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "    \t\t\t\t";
                $this->loadTemplate("TopxiaWebBundle:MyWrongcollection:my-wrong-tr.html.twig", "TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig", 10)->display($context);
                // line 11
                echo "    \t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    \t</tbody>
    </table>
    ";
            // line 15
            echo "  ";
        } else {
            // line 16
            echo "    <div class=\"empty\">您沒有任何錯題，真棒</div>
  ";
        }
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyWrongcollection:my-wrongcollections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  87 => 16,  84 => 15,  80 => 12,  66 => 11,  63 => 10,  46 => 9,  42 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
