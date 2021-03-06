<?php

/* TopxiaAdminBundle:OperationAnalysis:register.table.html.twig */
class __TwigTemplate_99c31c3974f8a02169d2c88e7caceffa24dacc8e12182498d91b4d887b5462de extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
          <thead>
            <tr>
              <th>用户名</th>
              <th>手机号</th>
              <th>注册邮箱</th>
              <th>注册来源</th>
              <th>IP地址</th>
              <th>注册时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 13
        if ((isset($context["registerDetail"]) ? $context["registerDetail"] : $this->getContext($context, "registerDetail"))) {
            // line 14
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["registerDetail"]) ? $context["registerDetail"] : $this->getContext($context, "registerDetail")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "              <tr>
                <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "nickname", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 18
                if ($this->getAttribute($context["data"], "verifiedMobile", array())) {
                    // line 19
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "verifiedMobile", array()), "html", null, true);
                    echo "<span class=\"text-success\">(已绑定)</span>
                    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 20
(isset($context["registerProfiles"]) ? $context["registerProfiles"] : $this->getContext($context, "registerProfiles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "mobile", array())) {
                    // line 21
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["registerProfiles"]) ? $context["registerProfiles"] : $this->getContext($context, "registerProfiles")), $this->getAttribute($context["data"], "id", array()), array(), "array"), "mobile", array()), "html", null, true);
                    echo "<span class=\"text-danger\">(未绑定)</span>
                    ";
                } else {
                    // line 23
                    echo "                    -- 
                    ";
                }
                // line 25
                echo "                  </td>
                <td>
                    ";
                // line 27
                $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($context["data"], "email", array()), "@");
                // line 28
                echo "                    ";
                if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : $this->getContext($context, "emailArr")), 1, array(), "array") != "edusoho.net")) {
                    // line 29
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "email", array()), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 31
                    echo "                      暂无
                    ";
                }
                // line 33
                echo "                </td>
                <td>
                  ";
                // line 35
                if (($this->getAttribute($context["data"], "type", array()) == "default")) {
                    echo "网站注册
                  ";
                } elseif (($this->getAttribute(                // line 36
$context["data"], "type", array()) == "web_mobile")) {
                    echo "网站手机注册
                  ";
                } elseif (($this->getAttribute(                // line 37
$context["data"], "type", array()) == "web_email")) {
                    echo "网站邮箱注册
                  ";
                } elseif (($this->getAttribute(                // line 38
$context["data"], "type", array()) == "weibo")) {
                    echo "新浪微博
                  ";
                } elseif (($this->getAttribute(                // line 39
$context["data"], "type", array()) == "qq")) {
                    echo "QQ
                  ";
                } elseif (($this->getAttribute(                // line 40
$context["data"], "type", array()) == "renren")) {
                    echo "人人
                  ";
                } elseif (($this->getAttribute(                // line 41
$context["data"], "type", array()) == "discuz")) {
                    echo "discuz
                  ";
                } elseif (($this->getAttribute(                // line 42
$context["data"], "type", array()) == "phpwind")) {
                    echo "phpwind
                  ";
                } elseif (((($this->getAttribute(                // line 43
$context["data"], "type", array()) == "weixinweb") || ($this->getAttribute($context["data"], "type", array()) == "weixinmob")) || ($this->getAttribute($context["data"], "type", array()) == "weixin"))) {
                    echo "微信
                  ";
                } elseif (($this->getAttribute(                // line 44
$context["data"], "type", array()) == "import")) {
                    echo "手动导入
                  ";
                } else {
                    // line 45
                    echo "其他
                  ";
                }
                // line 46
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "createdIp", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "          </tbody>
      </table>    
      ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:register.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  154 => 52,  151 => 51,  142 => 48,  138 => 47,  135 => 46,  131 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 33,  82 => 31,  76 => 29,  73 => 28,  71 => 27,  67 => 25,  63 => 23,  57 => 21,  55 => 20,  50 => 19,  48 => 18,  43 => 16,  40 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }
}
