<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_f5e2709ae29fce237e7f11b08559b7042a6fa48c213e9b8c66ced769f8f46d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

      ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">标题</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">副标题</label>
        <div class=\"col-md-8 controls\">
          <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\" class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">标签</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), ","), "html", null, true);
        echo "\" data-explain=\"将会应用于按标签搜索课程、相关课程的提取等\">
          <div class=\"help-block\">将会应用于按标签搜索课程、相关课程的提取等</div>
        </div>
      </div>

        <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">课程购买</label>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 50
        echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => "开启", "0" => "关闭"), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
        echo "
           <div class=\"help-block\">关闭后课程将无法在线购买加入、由教师/管理员后台导入。</div>
        </div>
      </div>

      ";
        // line 55
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
            // line 56
            echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">直播最大";
            // line 58
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            echo "数</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), 20)) : (20)), "html", null, true);
            echo "\" data-live-capacity-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_capacity", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"> 人
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      ";
        }
        // line 66
        echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"course_expiryDay\">";
        // line 68
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "有效期</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryDay", array()), "html", null, true);
        echo "\" > 天
          <div class=\"help-block\">设置该值后，";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "只能在有效期内进行课程的相关操作，系统默认会在到期前10天提醒";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "。该值为0，则不做此限制。</div>
        </div>
      </div>

      ";
        // line 75
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
            // line 76
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">连载状态</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 79
            echo $this->env->getExtension('topxia_html_twig')->radios("serializeMode", array("none" => "非连载课程", "serialize" => "更新中", "finished" => "已完结"), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()), "none")) : ("none")));
            echo "
          </div>
        </div>
      ";
        }
        // line 83
        echo "
      ";
        // line 84
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) {
            // line 85
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">视频观看时间限制</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_expiryDay\" name=\"watchLimit\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "watchLimit", array()), "html", null, true);
            echo "\" > 倍单视频总时长
            <div class=\"help-block\">0表示不限制。</div>
          </div>
        </div>
      ";
        }
        // line 93
        echo "
      ";
        // line 94
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.buy_before_approval")) {
            // line 95
            echo "        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">实名认证</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 98
            echo $this->env->getExtension('topxia_html_twig')->radios("approval", array("1" => "是", "0" => "否"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "approval", array()));
            echo "
            <div class=\"help-block\">设置该值后，学员购买课程前，必须先去申请实名认证。</div>
          </div>
        </div>
      ";
        }
        // line 103
        echo "      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">分类</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 108
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "categoryId", array()), "分类");
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>
      ";
        // line 113
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
            // line 114
            echo "      <div id=\"live-plugin-url\" class=\"form-group hidden\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <a  href=\"\" target=\"_blank\">直播“桌面分享”插件下载</a>
          </div>
      </div>
      ";
        }
        // line 120
        echo "      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">保存</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 126,  226 => 120,  218 => 114,  216 => 113,  208 => 108,  201 => 103,  193 => 98,  188 => 95,  186 => 94,  183 => 93,  175 => 88,  170 => 85,  168 => 84,  165 => 83,  158 => 79,  153 => 76,  151 => 75,  142 => 71,  138 => 70,  129 => 68,  125 => 66,  114 => 60,  109 => 58,  105 => 56,  103 => 55,  95 => 50,  84 => 42,  73 => 34,  62 => 26,  54 => 21,  46 => 15,  43 => 14,  36 => 3,  32 => 1,  30 => 8,  28 => 6,  26 => 5,  11 => 1,);
    }
}
