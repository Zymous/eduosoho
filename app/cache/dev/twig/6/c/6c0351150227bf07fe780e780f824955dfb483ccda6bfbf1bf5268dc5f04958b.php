<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_6c0351150227bf07fe780e780f824955dfb483ccda6bfbf1bf5268dc5f04958b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
<!DOCTYPE html>
";
        // line 6
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null));
        // line 7
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        // line 8
        $context["menu_current"] = twig_last($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb")));
        // line 9
        $context["menu_nav"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array"), null)) : (null));
        // line 10
        $context["menu_sidebar"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array"), null)) : (null));
        // line 11
        $context["menu_main"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array"), null)) : (null));
        // line 12
        $context["menu_hiddens"] = $this->env->getExtension('topxia_web_twig')->getSetting("menu_hiddens", array());
        // line 13
        echo "<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>
    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 34
        echo "  </title>

  ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 37
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 40
        echo "  
  ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo "管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
           ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", "admin", 1));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 69
            echo "            ";
            if (($this->getAttribute($context["m"], "code", array()) == "admin_app")) {
                // line 70
                echo "               ";
                if ( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 71
                    echo "                ";
                    $context["parameter"] = array("postStatus" => "all");
                    // line 72
                    echo "                ";
                    $context["m"] = $this->env->getExtension('topxia_web_twig')->arrayMerge($context["m"], array("router_params" => (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "router_name" => "admin_app_center"));
                    // line 73
                    echo "               ";
                }
                // line 74
                echo "            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if (($this->getAttribute($context["m"], "code", array()) == "admin_system")) {
                // line 77
                echo "              ";
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 78
                    echo "              <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
              ";
                    // line 79
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
              </li>
              ";
                }
                // line 82
                echo "            ";
            } else {
                echo "    
              ";
                // line 83
                if ( !(($this->getAttribute($context["m"], "code", array()) == "admin_app") && (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") == 1) || $this->env->getExtension('topxia_web_twig')->isWithoutNetwork()))) {
                    // line 84
                    echo "                <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                  ";
                    // line 85
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                </li>
              ";
                }
                // line 88
                echo "            ";
            }
            // line 89
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> 常用</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 97
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>

          <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                <ul class=\"dropdown-menu main-list\">
                  <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "    </div>
  </div>

  ";
        // line 199
        $this->displayBlock('footer', $context, $blocks);
        // line 202
        echo "
  ";
        // line 203
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 203)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 204
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 205
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 206
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 207
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>产品<br/>反馈</span>
      </a>
    </div>
  ";
        }
        // line 213
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb"))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb"))))) {
                // line 27
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 29
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo " -
        ";
            }
            // line 31
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "
        <div class=\"col-md-2\">
          ";
        // line 119
        $this->displayBlock('sidebar', $context, $blocks);
        // line 138
        echo "        </div>

        <div class=\"col-md-10\">
          <div class=\"page-header clearfix\">
            <h1 class=\"pull-left\">";
        // line 142
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
            <div class=\"pull-right\">

              ";
        // line 145
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 152
        echo "
            </div>
          </div>

          ";
        // line 156
        $context["menu_breadcrumb_length"] = twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb")));
        // line 157
        echo "
          ";
        // line 158
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : $this->getContext($context, "menu_breadcrumb_length")) >= 3)) {
            // line 159
            echo "            ";
            $context["tabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 160
            echo "          ";
        }
        // line 161
        echo "
          ";
        // line 162
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : $this->getContext($context, "menu_breadcrumb_length")) >= 4)) {
            // line 163
            echo "            ";
            $context["subTabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 164
            echo "          ";
        }
        // line 165
        echo "
          ";
        // line 166
        $this->displayBlock('content_header', $context, $blocks);
        // line 167
        echo "          
          ";
        // line 168
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "group", array()) == 1))) {
            // line 169
            echo "            <ul class=\"nav nav-tabs mbm\">
              ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 171
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 172
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 173
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")));
                    echo "
                  ";
                }
                // line 175
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "            </ul>
          ";
        }
        // line 179
        echo "
          ";
        // line 180
        if ((((array_key_exists("subTabMenus", $context)) ? (_twig_default_filter((isset($context["subTabMenus"]) ? $context["subTabMenus"] : $this->getContext($context, "subTabMenus")), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "group", array()) == 1))) {
            // line 181
            echo "            <ul class=\"nav nav-pills mbl small\">
              ";
            // line 182
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subTabMenus"]) ? $context["subTabMenus"] : $this->getContext($context, "subTabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 183
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 184
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 185
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                  ";
                }
                // line 187
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "            </ul>
          ";
        }
        // line 191
        echo "
          ";
        // line 192
        $this->displayBlock('main', $context, $blocks);
        // line 193
        echo "        </div>

      ";
    }

    // line 119
    public function block_sidebar($context, array $blocks = array())
    {
        // line 120
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedMenus"]) {
            // line 121
            echo "
              <div class=\"list-group\">
                ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedMenus"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 124
                echo "                ";
                $context["array"] = array("0" => "admin_my_cloud", "1" => "admin_setting_cloud_video", "2" => "admin_setting_cloud");
                // line 125
                echo "                 ";
                if ((!twig_in_filter($this->getAttribute($context["m"], "code", array()), (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array"))) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                    // line 126
                    echo "                            
                  ";
                    // line 127
                    if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                        // line 128
                        echo "                    ";
                        $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                        // line 129
                        echo "                    ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (isset($context["menuClass"]) ? $context["menuClass"] : $this->getContext($context, "menuClass")));
                        echo "
                  ";
                    }
                    // line 131
                    echo "                      
                  ";
                }
                // line 133
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          ";
    }

    // line 142
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array()), $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "name", array()))) : ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "name", array()))), "html", null, true);
    }

    // line 145
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 146
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "code", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 147
            echo "                  ";
            if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                // line 148
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            // line 150
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "              ";
    }

    // line 166
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 192
    public function block_main($context, array $blocks = array())
    {
    }

    // line 199
    public function block_footer($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 216
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 217
            echo "  <a 
  ";
            // line 218
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 219
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 221
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 222
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 226
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 228
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 229
                echo "    target=\"blank\"
  ";
            }
            // line 231
            echo "  >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 231,  674 => 229,  671 => 228,  665 => 226,  657 => 222,  654 => 221,  648 => 219,  646 => 218,  643 => 217,  629 => 216,  622 => 200,  619 => 199,  614 => 192,  609 => 166,  605 => 151,  599 => 150,  593 => 148,  590 => 147,  585 => 146,  582 => 145,  576 => 142,  572 => 137,  565 => 135,  558 => 133,  554 => 131,  548 => 129,  545 => 128,  543 => 127,  540 => 126,  537 => 125,  534 => 124,  530 => 123,  526 => 121,  521 => 120,  518 => 119,  512 => 193,  510 => 192,  507 => 191,  503 => 189,  496 => 187,  490 => 185,  488 => 184,  481 => 183,  477 => 182,  474 => 181,  472 => 180,  469 => 179,  465 => 177,  458 => 175,  452 => 173,  450 => 172,  443 => 171,  439 => 170,  436 => 169,  434 => 168,  431 => 167,  429 => 166,  426 => 165,  423 => 164,  420 => 163,  418 => 162,  415 => 161,  412 => 160,  409 => 159,  407 => 158,  404 => 157,  402 => 156,  396 => 152,  394 => 145,  388 => 142,  382 => 138,  380 => 119,  376 => 117,  373 => 116,  368 => 49,  362 => 46,  358 => 45,  354 => 44,  350 => 43,  345 => 42,  342 => 41,  338 => 32,  324 => 31,  318 => 29,  312 => 27,  309 => 26,  291 => 25,  288 => 24,  281 => 213,  272 => 207,  269 => 206,  267 => 205,  264 => 204,  262 => 203,  259 => 202,  257 => 199,  252 => 196,  250 => 116,  236 => 105,  231 => 103,  225 => 100,  219 => 97,  213 => 94,  208 => 91,  201 => 89,  198 => 88,  192 => 85,  185 => 84,  183 => 83,  178 => 82,  172 => 79,  165 => 78,  162 => 77,  160 => 76,  157 => 75,  154 => 74,  151 => 73,  148 => 72,  145 => 71,  142 => 70,  139 => 69,  135 => 68,  124 => 64,  109 => 52,  105 => 51,  102 => 50,  100 => 49,  97 => 48,  95 => 41,  92 => 40,  87 => 38,  82 => 37,  80 => 36,  76 => 34,  71 => 33,  69 => 24,  64 => 22,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }
}
