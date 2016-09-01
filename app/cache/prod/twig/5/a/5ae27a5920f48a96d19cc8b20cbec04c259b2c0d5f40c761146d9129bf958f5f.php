<?php

/* ClassroomBundle:Classroom:classroom-join-header.html.twig */
class __TwigTemplate_5ae27a5920f48a96d19cc8b20cbec04c259b2c0d5f40c761146d9129bf958f5f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 1);
        // line 2
        echo "<section class=\"class-header after ";
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">
  
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
      ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>

    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                扫二维码继续学习
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 34
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo "评价)</span>
            </div>
            ";
        // line 37
        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "auditor")) {
            // line 38
            echo "              <div class=\"price\">
                价格： <span>";
            // line 39
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 40
                echo "                      ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 41
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 43
                    echo "                      免费
                      ";
                }
                // line 45
                echo "                  ";
            } else {
                // line 46
                echo "                    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 47
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo "元
                    ";
                } else {
                    // line 49
                    echo "                      免费
                    ";
                }
                // line 51
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 54
        echo "          </div>
          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              承<br>诺<br>服<br>务
            </div>
            ";
        // line 59
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 59)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 60
        echo "          </div>
        </div>
        <div class=\"class-operation\">
          <ul class='class-data clearfix 
          ";
        // line 64
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false)))) {
            // line 65
            echo "          three-col
          ";
        } else {
            // line 67
            echo "          two-col
          ";
        }
        // line 69
        echo "          '>
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>学员(";
        // line 72
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>分享</p>
                </a>
                ";
        // line 80
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 80)->display(array_merge($context, array("type" => "classroom")));
        echo " 
              </span>
            </li>
            ";
        // line 83
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false)))) {
            // line 84
            echo "
            ";
            // line 85
            if (!twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
                echo "  
              <li>
                <a type=\"button\" 
                ";
                // line 88
                if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()) > 0))) {
                    // line 89
                    echo "                href=\"#modal\" 
                data-toggle=\"modal\" 
                data-url=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
                ";
                } else {
                    // line 93
                    echo "                href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" id =\"quit\" 
                ";
                }
                // line 95
                echo "                >
                 <p><i class=\"es-icon es-icon-exit\"></i></p>
                 <p>退出</p>
                </a>
              </li>
            ";
            }
            // line 101
            echo "            ";
        }
        // line 102
        echo "          </ul>
          ";
        // line 103
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 104
            echo "            <div class=\"class-auditor hidden-sm\">
              您现在是<span class=\"color-warning\">旁听生</span>，不能完整学习<i class=\"es-icon es-icon-help color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务\"></i><br>
              
              ";
            // line 107
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
                // line 108
                echo "                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >立即加入购买</a>
              ";
            } else {
                // line 110
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                echo "\">立即加入购买</a>
              ";
            }
            // line 112
            echo "              
            </div>
          ";
        }
        // line 115
        echo "        </div>
      ";
        // line 116
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage")) {
            // line 117
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute(        // line 120
(isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Handle")) {
            // line 121
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 125
        echo "      </div>
    </div>
  </div>
</section>

";
        // line 130
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 131
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 131,  296 => 130,  289 => 125,  279 => 121,  277 => 120,  268 => 117,  266 => 116,  263 => 115,  258 => 112,  252 => 110,  246 => 108,  244 => 107,  239 => 104,  237 => 103,  234 => 102,  231 => 101,  223 => 95,  217 => 93,  212 => 91,  208 => 89,  206 => 88,  200 => 85,  197 => 84,  195 => 83,  189 => 80,  178 => 72,  173 => 69,  169 => 67,  165 => 65,  163 => 64,  157 => 60,  155 => 59,  148 => 54,  141 => 51,  137 => 49,  131 => 47,  128 => 46,  125 => 45,  121 => 43,  113 => 41,  110 => 40,  108 => 39,  105 => 38,  103 => 37,  98 => 35,  94 => 34,  81 => 24,  77 => 23,  65 => 18,  61 => 17,  50 => 10,  39 => 8,  35 => 7,  31 => 6,  21 => 2,  19 => 1,);
    }
}
