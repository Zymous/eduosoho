<?php

/* TopxiaWebBundle:Course:create.html.twig */
class __TwigTemplate_d9151ed30030f37fa096e6a4c25e2844bb2cd9ae88081fe0292a45ea39c50f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "创建";
        if (((isset($context["type"]) ? $context["type"] : null) == "normal")) {
            echo "课程";
        } else {
            echo "直播课程";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>创建";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : null) == "normal")) {
            echo "课程";
        } else {
            echo "直播课程";
        }
        echo "</h2></div>
      
      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "title", array())) ||  !$this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()))) {
            // line 14
            echo "        <div class=\"alert alert-info\">
          <h5><strong>请先完成以下设置，才能创建课程：</strong></h5>
          <ol>
            <li>设置头像。
              ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array())) {
                // line 19
                echo "                <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 已完成</span> </li>
              ";
            } else {
                // line 21
                echo "                <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 未完成</span>，<a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar", array("fromCourse" => true));
                echo "\" class=\"alert-link\">去设置</a>
              ";
            }
            // line 23
            echo "            <li>设置头衔 、自我介绍。
              ";
            // line 24
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "title", array()) && $this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()))) {
                // line 25
                echo "                <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 已完成</span> </li>
              ";
            } else {
                // line 27
                echo "                <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 未完成</span>，<a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings", array("fromCourse" => true));
                echo "\" class=\"alert-link\">去设置</a>
              ";
            }
            // line 29
            echo "            </li>
          </ol>
        </div>
      ";
        } else {
            // line 33
            echo "        <form id=\"course-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"course_title\" class=\"required\">标题</label></div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">课程购买</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 48
            echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => "开启", "0" => "关闭"), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
            echo "
           <div class=\"help-block\">关闭后课程将无法在线购买加入、由教师/管理员后台导入。</div>
        </div>
      </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <input id=\"course-create-btn\" data-submiting-text=\"正在创建\" class=\"btn btn-fat btn-primary\" type=\"submit\" value=\"创建\">
            </div>
          </div>

          ";
            // line 59
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
                // line 60
                echo "          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <p class=\"mtl\"><a href=\"http://www.qiqiuyu.com/course/22\" class=\"text-muted\" target=\"_blank\">如何创建课程？</a></p>
            </div>
          </div>
          ";
            }
            // line 66
            echo "
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          <input type=\"hidden\" name=\"type\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">

        </form>

      ";
        }
        // line 73
        echo "    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 73,  154 => 68,  150 => 67,  147 => 66,  139 => 60,  137 => 59,  123 => 48,  107 => 35,  103 => 33,  97 => 29,  91 => 27,  87 => 25,  85 => 24,  82 => 23,  76 => 21,  72 => 19,  70 => 18,  64 => 14,  62 => 13,  53 => 11,  48 => 8,  45 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
