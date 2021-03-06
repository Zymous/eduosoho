<?php

/* TopxiaWebBundle:CourseOrder:buy-modal.html.twig */
class __TwigTemplate_99d2bd77379b20b324b7468b1909ba6f3299b3dc15a2e235c81694c2503a76d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["billable"] = true;
        // line 4
        if ((((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin")) && ($this->getAttribute(        // line 5
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()) == 0)) || (( !$this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") || ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "RMB")) && ($this->getAttribute(        // line 6
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) == 0)))) {
            // line 8
            $context["billable"] = false;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["billable"]) ? $context["billable"] : $this->getContext($context, "billable"))) {
            echo "购买课程";
        } else {
            echo "加入学习";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        if (((isset($context["billable"]) ? $context["billable"] : $this->getContext($context, "billable")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live"))) {
            // line 14
            echo "    <div class=\"alert alert-info\">注意：请在30分钟内完成支付，否则订单将会过期失效</div>
  ";
        }
        // line 16
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\" 
  action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_buy_modify_user_info");
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">课程名称</div>
      <div class=\"col-sm-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "》</span>
        <input type=\"hidden\" name=\"lessonId\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["lessonId"]) ? $context["lessonId"] : $this->getContext($context, "lessonId")), "html", null, true);
        echo "\">
      </div>
    </div>

    ";
        // line 27
        if ((isset($context["billable"]) ? $context["billable"] : $this->getContext($context, "billable"))) {
            // line 28
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">价格</div>
      <div class=\"col-sm-9 controls money-text\">
      \t<span class=\"control-text\">
          ";
            // line 32
            if (((isset($context["vipStatus"]) ? $context["vipStatus"] : $this->getContext($context, "vipStatus")) == "ok")) {
                // line 33
                echo "            会员免费
          ";
            } else {
                // line 35
                echo "            ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 36
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()), "html", null, true);
                    echo "</strong>
            <span class=\"text-muted\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 39
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
                    echo "</strong>
        \t\t<span class=\"text-muted\">元</span>
            ";
                }
                // line 42
                echo "          ";
            }
            // line 43
            echo "      \t</span>
      </div>
    </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ((isset($context["billable"]) ? $context["billable"] : $this->getContext($context, "billable"))) {
            // line 49
            echo "      ";
            if ( !(isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments"))) {
                // line 50
                echo "        <div class=\"alert alert-info\">";
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("payment.disabled_message"), "尚未开启支付模块，无法购买课程。");
                echo "</div>
      ";
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "      ";
            if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : $this->getContext($context, "avatarAlert"))) {
                // line 54
                echo "        <div class=\"alert alert-warning\">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar");
                echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a></div>
      ";
            } else {
                // line 56
                echo "        <div class=\"alert alert-info\">此课程为免费课程，无需购买，可直接加入学习。</div>
      ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "    <input type=\"hidden\" name=\"targetId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 63
        $context["userinfo_enable"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false);
        // line 64
        echo "    ";
        $context["checkedFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.userinfoFields"), array());
        // line 65
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 65)->display(array_merge($context, array("isBuyFillUserinfo" => (isset($context["userinfo_enable"]) ? $context["userinfo_enable"] : $this->getContext($context, "userinfo_enable")), "userinfoFieldsSetting" => (isset($context["checkedFields"]) ? $context["checkedFields"] : $this->getContext($context, "checkedFields")), "userFields" => (isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "showNavTip" => 1)));
        // line 66
        echo "
  </form>
";
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "  ";
        $context["priceType"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type");
        // line 72
        echo "  ";
        if (((isset($context["billable"]) ? $context["billable"] : $this->getContext($context, "billable")) && (((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")), "RMB")) : ("RMB")) == "RMB") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) || ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")), "RMB")) : ("RMB")) == "Coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()) > 0))))) {
            // line 73
            echo "    ";
            if ((isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments"))) {
                // line 74
                echo "      ";
                if ((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
                    // line 75
                    echo "        <span class=\"text-muted\">预览模式无法支付</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">去支付</button> 
      ";
                } else {
                    // line 78
                    echo "        ";
                    if (((isset($context["vipStatus"]) ? $context["vipStatus"] : $this->getContext($context, "vipStatus")) == "ok")) {
                        // line 79
                        echo "           <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
        ";
                    } else {
                        // line 81
                        echo "        <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"正在创建订单...\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">去支付</button>
        ";
                    }
                    // line 83
                    echo "      ";
                }
                // line 84
                echo "    ";
            } elseif (( !(isset($context["payments"]) ? $context["payments"] : $this->getContext($context, "payments")) && ((isset($context["vipStatus"]) ? $context["vipStatus"] : $this->getContext($context, "vipStatus")) == "ok"))) {
                // line 85
                echo "      <button id=\"join-course-btn\" class=\"btn btn-primary\" 
        ";
                // line 86
                if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "maxStudentNum", array()))))) {
                    // line 87
                    echo "        disabled=\"disabled\"
        ";
                }
                // line 89
                echo "        data-loading-text=\"正在加入...\" data-submiting-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
    ";
            }
            // line 91
            echo "  ";
        } else {
            // line 92
            echo "    ";
            if ((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
                // line 93
                echo "      <span class=\"text-muted\">预览模式无法加入学习</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">加入学习</button> 
    ";
            } else {
                // line 95
                echo "  
      ";
                // line 96
                if ( !(isset($context["avatarAlert"]) ? $context["avatarAlert"] : $this->getContext($context, "avatarAlert"))) {
                    // line 97
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\" 
        ";
                    // line 98
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "maxStudentNum", array()))))) {
                        // line 99
                        echo "        disabled=\"disabled\"
        ";
                    }
                    // line 101
                    echo "        data-loading-text=\"正在加入...\" data-submiting-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
      ";
                }
                // line 103
                echo "    ";
            }
            // line 104
            echo "
  ";
        }
        // line 106
        echo "
  <script>
    app.load('course/buy-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 106,  267 => 104,  264 => 103,  260 => 101,  256 => 99,  254 => 98,  251 => 97,  249 => 96,  246 => 95,  241 => 93,  238 => 92,  235 => 91,  231 => 89,  227 => 87,  225 => 86,  222 => 85,  219 => 84,  216 => 83,  212 => 81,  208 => 79,  205 => 78,  200 => 75,  197 => 74,  194 => 73,  191 => 72,  188 => 71,  185 => 70,  179 => 66,  176 => 65,  173 => 64,  171 => 63,  166 => 61,  160 => 59,  157 => 58,  153 => 56,  147 => 54,  144 => 53,  141 => 52,  135 => 50,  132 => 49,  130 => 48,  127 => 47,  121 => 43,  118 => 42,  111 => 39,  106 => 37,  101 => 36,  98 => 35,  94 => 33,  92 => 32,  86 => 28,  84 => 27,  77 => 23,  73 => 22,  65 => 17,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 10,  36 => 1,  33 => 8,  31 => 6,  30 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
