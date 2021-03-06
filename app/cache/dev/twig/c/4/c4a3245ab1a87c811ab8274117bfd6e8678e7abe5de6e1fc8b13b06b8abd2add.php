<?php

/* TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig */
class __TwigTemplate_c4a3245ab1a87c811ab8274117bfd6e8678e7abe5de6e1fc8b13b06b8abd2add extends Twig_Template
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
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">
  ";
        // line 2
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 2);
        // line 3
        echo "  
  ";
        // line 4
        $context["count"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 12)) : (12));
        // line 5
        echo "  ";
        $context["categoryId"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array()), 0)) : (0));
        // line 6
        echo "  ";
        $context["orderBy"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array()), "latest")) : ("latest"));
        // line 7
        echo "  ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "latest")) {
            // line 8
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 9
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 10
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 11
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 12
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("PopularCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), "type" => "studentNum"));
            // line 13
            echo "  ";
        }
        // line 14
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 15
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 22
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\"data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\"><a href=\"javascript:;\">全部课程</a></li>
        ";
        // line 23
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 24
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 25
                    echo "            ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                        // line 26
                        echo "              <li role=\"presentation\" class=\"";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo " js-course-filter\"data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    // line 28
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">全部课程 <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 34
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\"><a href=\"javascript:;\">全部课程</a></li>
          ";
        // line 35
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 36
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 37
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                        // line 38
                        echo "                <li role=\"presentation\" class = \"js-course-filter ";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 40
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          ";
        }
        // line 42
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 45
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\">
          最新
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 48
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\">
          最热
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 51
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\">
          推荐
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 58
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
            // line 59
            echo "          <div class=\"col-lg-3 col-md-4 col-sm-6\">
            ";
            // line 60
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 60)->display($context);
            // line 61
            echo "          </div>
        ";
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
        // line 63
        echo "      </div>
    </div>
    <div class=\"text-center mvl\">
      <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        更多课程 <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 66,  258 => 63,  243 => 61,  241 => 60,  238 => 59,  221 => 58,  207 => 51,  197 => 48,  187 => 45,  182 => 42,  179 => 41,  169 => 40,  157 => 38,  154 => 37,  142 => 36,  140 => 35,  132 => 34,  126 => 30,  123 => 29,  113 => 28,  101 => 26,  98 => 25,  86 => 24,  84 => 23,  76 => 22,  69 => 18,  65 => 17,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
