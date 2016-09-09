<?php

/* TopxiaAdminBundle:OperationAnalysis:register.html.twig */
class __TwigTemplate_cd5eed0c886d93846133562b10982fe43ebce27a914c6413add6bf4894a7f801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:register.html.twig", 1);
        $this->blocks = array(
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "analysis/register";
        // line 3
        $context["href"] = "admin_operation_analysis_register";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_analysisBody($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"col-md-12\">  
              ";
        // line 6
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "trend")) {
            // line 7
            echo "\t <div id=\"line-data\"></div>
\t           <input id=\"data\"  type=\"hidden\" value='";
            // line 8
            if ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) {
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
            }
            echo "'>  
\t          </input>
\t          <input id=\"registerStartDate\"  type=\"hidden\" value='";
            // line 10
            if ((isset($context["registerStartDate"]) ? $context["registerStartDate"] : $this->getContext($context, "registerStartDate"))) {
                echo twig_escape_filter($this->env, (isset($context["registerStartDate"]) ? $context["registerStartDate"] : $this->getContext($context, "registerStartDate")), "html", null, true);
            }
            echo "'>  
\t          </input>
              ";
        } elseif ((        // line 12
(isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "detail")) {
            // line 13
            echo "                    ";
            $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:register.table.html.twig", "TopxiaAdminBundle:OperationAnalysis:register.html.twig", 13)->display($context);
            // line 14
            echo "              ";
        }
        // line 15
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  63 => 14,  60 => 13,  58 => 12,  51 => 10,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
