<?php

/* TopxiaWebBundle:Default:groups.html.twig */
class __TwigTemplate_0afaeef7ec520182032eec605b283e438c59058a99e2d218d52461b096f3db25 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:groups.html.twig", 1);
        // line 2
        echo "<!-- 小组动态 -->
";
        // line 3
        $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 6)) : (6))));
        // line 4
        $context["reviews"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourseReviews", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 4)) : (4))));
        // line 5
        $context["ArticlesIsNull"] = false;
        // line 6
        echo "<section class=\"dynamic-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"dynamic-section-main row\">
      ";
        // line 13
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select1", array()) == "checked")) {
            // line 14
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>热门小组</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 26
                if ($this->getAttribute($context["group"], "logo", array())) {
                    // line 27
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 29
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                    ";
                }
                // line 31
                echo "                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-light\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                echo "</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 51
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select2", array()) == "checked")) {
            // line 52
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              最新资讯
              <a class=\"more\" href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            ";
            // line 61
            $context["featuredArticles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("type" => "featured", "count" => 2));
            // line 62
            echo "            ";
            if ((isset($context["featuredArticles"]) ? $context["featuredArticles"] : $this->getContext($context, "featuredArticles"))) {
                // line 63
                echo "            <ul class=\"index-recommend-aricle\">
              ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["featuredArticles"]) ? $context["featuredArticles"] : $this->getContext($context, "featuredArticles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 65
                    echo "                ";
                    $context["ArticlesIsNull"] = true;
                    // line 66
                    echo "                <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                        echo "last";
                    }
                    echo "\">
                  <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\">
                    ";
                    // line 68
                    if ($this->getAttribute($context["article"], "thumb", array())) {
                        // line 69
                        echo "                      ";
                        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute($context["article"], "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["article"], "thumb", array()), null)) : (null)), ""), "img-responsive", $this->getAttribute($context["article"], "title", array()), "lazyload_class.png");
                        echo "
                    ";
                    } else {
                        // line 71
                        echo "                      <img class=\"img-responsive\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/img/article/article_banner_" . $this->getAttribute($context["loop"], "index", array())) . ".jpg")), "html", null, true);
                        echo "\"> 
                    ";
                    }
                    // line 73
                    echo "                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</div>
                  </a>
                </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "            </ul>
            ";
            }
            // line 80
            echo "            <ul class=\"index-new-article ";
            if ((isset($context["ArticlesIsNull"]) ? $context["ArticlesIsNull"] : $this->getContext($context, "ArticlesIsNull"))) {
            } else {
                echo "full";
            }
            echo "\">
              ";
            // line 81
            $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 5));
            // line 82
            echo "              ";
            if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
                // line 83
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 84
                    echo "                  <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", array()) == 5)) {
                        echo "last";
                    }
                    echo " clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a> <span class=\"date\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["article"], "createdTime", array())), "html", null, true);
                    echo "</span></li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "              ";
            }
            // line 87
            echo "            </ul>
          </div>
        </div>
      </div> 
      ";
        }
        // line 92
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select3", array()) == "checked")) {
            // line 93
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              学员评价
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 101
            if ((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))) {
                // line 102
                echo "              ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 103
                    echo "              ";
                    $context["author"] = (($this->getAttribute($context["review"], "User", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "User", array()), null)) : (null));
                    // line 104
                    echo "              ";
                    $context["course"] = (($this->getAttribute($context["review"], "course", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "course", array()), null)) : (null));
                    // line 105
                    echo "              ";
                    if (((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")) && (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))) {
                        // line 106
                        echo "            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              ";
                        // line 108
                        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "", "avatar-sm", true);
                        echo "
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  ";
                        // line 112
                        echo $context["web_macro"]->getuser_link((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "link-light");
                        echo "
                  <span class=\"score\">";
                        // line 113
                        echo $context["web_macro"]->getstar($this->getAttribute($context["review"], "rating", array()));
                        echo "</span>
                  发布于 <a class=\"link-light\" href=\"";
                        // line 114
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                        echo "\">《";
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), 10);
                        echo "》</a>
                </div>
                <div class=\"content gray-darker\">
                  ";
                        // line 117
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 30);
                        echo "
                </div>
                <span class=\"date\">";
                        // line 119
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</span>
              </div>
            </div>
            ";
                    }
                    // line 123
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "            ";
            } else {
                // line 125
                echo "              <div class=\"empty\">还没有评价</div>
            ";
            }
            // line 127
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 131
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select4", array()) == "checked")) {
            // line 132
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              学员动态
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 140
            $context["statuses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("mode" => "simple", "count" => 4, "private" => 0));
            // line 141
            echo "
            ";
            // line 142
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 143
                echo "              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  ";
                // line 145
                echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["status"], "user", array()), "", "avatar-sm");
                echo "
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    ";
                // line 149
                echo $context["web_macro"]->getuser_link($this->getAttribute($context["status"], "user", array()));
                echo "
                  </div>
                  <div class=\"content\">
                    ";
                // line 152
                echo $this->getAttribute($context["status"], "message", array());
                echo "
                  </div>
                  <span class=\"date\">";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["status"], "createdTime", array())), "html", null, true);
                echo "</span>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 162
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 162,  435 => 158,  425 => 154,  420 => 152,  414 => 149,  407 => 145,  403 => 143,  399 => 142,  396 => 141,  394 => 140,  384 => 132,  381 => 131,  375 => 127,  371 => 125,  368 => 124,  362 => 123,  355 => 119,  350 => 117,  342 => 114,  338 => 113,  334 => 112,  327 => 108,  323 => 106,  320 => 105,  317 => 104,  314 => 103,  309 => 102,  307 => 101,  297 => 93,  294 => 92,  287 => 87,  284 => 86,  257 => 84,  239 => 83,  236 => 82,  234 => 81,  226 => 80,  222 => 78,  204 => 74,  201 => 73,  195 => 71,  189 => 69,  187 => 68,  183 => 67,  176 => 66,  173 => 65,  156 => 64,  153 => 63,  150 => 62,  148 => 61,  141 => 57,  134 => 52,  131 => 51,  124 => 46,  113 => 41,  109 => 40,  102 => 36,  98 => 35,  92 => 31,  84 => 29,  76 => 27,  74 => 26,  70 => 25,  66 => 23,  62 => 22,  54 => 17,  49 => 14,  47 => 13,  41 => 10,  37 => 9,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
