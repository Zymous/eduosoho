<?php

/* TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig */
class __TwigTemplate_d02ca204a954edb36c932e4a528a92e7d1d1aed5e15682d9c441e0b3254db4f9 extends Twig_Template
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
        if (((array_key_exists("isBuyFillUserinfo", $context)) ? (_twig_default_filter((isset($context["isBuyFillUserinfo"]) ? $context["isBuyFillUserinfo"] : $this->getContext($context, "isBuyFillUserinfo")), false)) : (false))) {
            // line 2
            echo "  ";
            if ((isset($context["userinfoFieldsSetting"]) ? $context["userinfoFieldsSetting"] : $this->getContext($context, "userinfoFieldsSetting"))) {
                // line 3
                echo "    ";
                if (((array_key_exists("showNavTip", $context)) ? (_twig_default_filter((isset($context["showNavTip"]) ? $context["showNavTip"] : $this->getContext($context, "showNavTip")), true)) : (true))) {
                    // line 4
                    echo "      <div class=\"help-block\">温情提示：如果您的资料有变更，请在此修改，以便更好的为您服务！</div>
      <hr>
    ";
                }
                // line 7
                echo "
    ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userinfoFieldsSetting"]) ? $context["userinfoFieldsSetting"] : $this->getContext($context, "userinfoFieldsSetting")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 9
                    echo "      ";
                    $context["defaultFields"] = $this->env->getExtension('topxia_web_twig')->getDict("userInfoFields");
                    // line 10
                    echo "      ";
                    if (($context["field"] == "truename")) {
                        // line 11
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"truename\">";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "truename", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 14
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "truename", array()))) {
                            // line 15
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "truename", array()), "html", null, true);
                            echo " <small class=\"text-success\">(已认证)</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "truename", array()))) {
                            // line 17
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "truename", array()), "html", null, true);
                            echo " <small class=\"text-warning\">(实名认证中)</small></div>
            ";
                        } else {
                            // line 19
                            echo "              <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "truename", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 21
                        echo "          </div>
        </div>
      ";
                    }
                    // line 24
                    echo "
      ";
                    // line 25
                    if (($context["field"] == "email")) {
                        // line 26
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"email\">";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "email", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 29
                        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "@");
                        // line 30
                        echo "            ";
                        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : $this->getContext($context, "emailArr")), 1, array(), "array") != "edusoho.net")) {
                            // line 31
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
                            echo "</div>
            ";
                        } else {
                            // line 33
                            echo "              <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" value=\"\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_email_check");
                            echo "\" />
            ";
                        }
                        // line 35
                        echo "          </div>
        </div>
      ";
                    }
                    // line 38
                    echo "
      ";
                    // line 39
                    if (($context["field"] == "mobile")) {
                        // line 40
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"mobile\">";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "mobile", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 43
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) {
                            // line 44
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "verifiedMobile", array())), "html", null, true);
                            echo "<small class=\"text-success\">(已绑定)</small></div>
            ";
                        } else {
                            // line 46
                            echo "              <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mobile", array()), "html", null, true);
                            echo "\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_mobile_check");
                            echo "\">
            ";
                        }
                        // line 48
                        echo "          </div>
        </div>
      ";
                    }
                    // line 51
                    echo "
      ";
                    // line 52
                    if (($context["field"] == "qq")) {
                        // line 53
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"qq\">";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "qq", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "qq", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 60
                    echo "
      ";
                    // line 61
                    if (($context["field"] == "company")) {
                        // line 62
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"company\">";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "company", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "company", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 69
                    echo "
      ";
                    // line 70
                    if (($context["field"] == "job")) {
                        // line 71
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"job\">";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "job", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 78
                    echo "
      ";
                    // line 79
                    if (($context["field"] == "idcard")) {
                        // line 80
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"idcard\">";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "idcard", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 83
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idcard", array()))) {
                            // line 84
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idcard", array())), "html", null, true);
                            echo " <small class=\"text-success\">(已认证)</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 85
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idcard", array()))) {
                            // line 86
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idcard", array())), "html", null, true);
                            echo " <small class=\"text-warning\">(实名认证中)</small></div>
            ";
                        } else {
                            // line 88
                            echo "              <input type=\"text\" id=\"idcard\" name=\"";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "\"  class=\"form-control\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idcard", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 90
                        echo "          </div>
        </div>
      ";
                    }
                    // line 93
                    echo "
      ";
                    // line 94
                    if (($context["field"] == "gender")) {
                        // line 95
                        echo "        <div class=\"form-group\">        
          <label class=\"col-sm-3 control-label required\" for=\"gender\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "gender", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6\">
            <div class=\"checkbox-inline\" style=\"padding-left: 0\">
              <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\" ";
                        // line 99
                        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()) == "male")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_0\" class=\"required mrl\">男</span>
              <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"  ";
                        // line 101
                        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()) == "female")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_1\" class=\"required\" >女</span>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 107
                    echo "
      ";
                    // line 108
                    if (($context["field"] == "weixin")) {
                        // line 109
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weixin\">";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "weixin", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weixin\" name=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weixin", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 116
                    echo "
      ";
                    // line 117
                    if (($context["field"] == "weibo")) {
                        // line 118
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weibo\">";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : $this->getContext($context, "defaultFields")), "weibo", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weibo\" name=\"";
                        // line 121
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weibo", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 124
                    echo " 

      ";
                    // line 126
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 127
                        echo "        ";
                        if (($context["field"] == $this->getAttribute($context["userField"], "fieldName", array()))) {
                            // line 128
                            echo "           ";
                            if (($this->getAttribute($context["userField"], "type", array()) == "text")) {
                                echo "             
              <div class=\"form-group\">
                <label for=\"";
                                // line 130
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label \">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <textarea id=\"";
                                // line 132
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control \">";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 137
$context["userField"], "type", array()) == "int")) {
                                // line 138
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 139
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 141
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"最大值为9位整数\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 146
$context["userField"], "type", array()) == "float")) {
                                // line 147
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 148
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 150
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"保留到2位小数\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 155
$context["userField"], "type", array()) == "date")) {
                                // line 156
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 157
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 159
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 164
$context["userField"], "type", array()) == "varchar")) {
                                // line 165
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 166
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6  controls\">
                  <input type=\"text\" id=\"";
                                // line 168
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>
            ";
                            }
                            // line 173
                            echo "            
          ";
                        }
                        // line 175
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "    ";
            }
        }
        // line 179
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 179,  479 => 177,  473 => 176,  467 => 175,  463 => 173,  451 => 168,  444 => 166,  441 => 165,  439 => 164,  425 => 159,  418 => 157,  415 => 156,  413 => 155,  399 => 150,  392 => 148,  389 => 147,  387 => 146,  373 => 141,  366 => 139,  363 => 138,  361 => 137,  349 => 132,  342 => 130,  336 => 128,  333 => 127,  329 => 126,  325 => 124,  316 => 121,  311 => 119,  308 => 118,  306 => 117,  303 => 116,  294 => 112,  289 => 110,  286 => 109,  284 => 108,  281 => 107,  270 => 101,  263 => 99,  257 => 96,  254 => 95,  252 => 94,  249 => 93,  244 => 90,  236 => 88,  230 => 86,  228 => 85,  223 => 84,  221 => 83,  216 => 81,  213 => 80,  211 => 79,  208 => 78,  201 => 74,  196 => 72,  193 => 71,  191 => 70,  188 => 69,  181 => 65,  176 => 63,  173 => 62,  171 => 61,  168 => 60,  161 => 56,  156 => 54,  153 => 53,  151 => 52,  148 => 51,  143 => 48,  135 => 46,  129 => 44,  127 => 43,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  109 => 35,  103 => 33,  97 => 31,  94 => 30,  92 => 29,  87 => 27,  84 => 26,  82 => 25,  79 => 24,  74 => 21,  68 => 19,  62 => 17,  60 => 16,  55 => 15,  53 => 14,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  32 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
