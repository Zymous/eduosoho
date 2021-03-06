<?php

/* TopxiaWebBundle:Course:Widget/course-price.html.twig */
class __TwigTemplate_ce5fb94ec4ca127cb8293ba4bffbde376331096fdbefc3f2bf4ad938f03748c6 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">
  ";
        // line 13
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array())) {
            // line 14
            echo "
    ";
            // line 15
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 16
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 17
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 19
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
                    echo " 元</span>
      ";
                }
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 24
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 25
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originCoinPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 27
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                    echo " 元</del></span>
      ";
                }
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 32
                echo "
      <span class=\"discount\">
        ";
                // line 34
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originCoinPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0)))) {
                    // line 35
                    echo "          限免
        ";
                } else {
                    // line 37
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), 2, "common"), "html", null, true);
                    echo " 折
        ";
                }
                // line 39
                echo "      </span>

    ";
            }
            // line 42
            echo "
  ";
        } else {
            // line 44
            echo "
    ";
            // line 45
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 46
                echo "      <span class=\"price\">
        ";
                // line 47
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 48
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                        echo " ";
                    } else {
                        echo " <span class=\"text-success\">免费</span> ";
                    }
                    // line 49
                    echo "        ";
                } else {
                    // line 50
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
                        echo " 元";
                    } else {
                        echo " <span class=\"text-success\">免费</span> ";
                    }
                    // line 51
                    echo "        ";
                }
                // line 52
                echo "      </span>
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if (twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")))) {
                // line 56
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 57
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originCoinPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 59
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 61
                echo "    ";
            }
            // line 62
            echo "
  ";
        }
        // line 64
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  176 => 62,  173 => 61,  167 => 59,  159 => 57,  156 => 56,  154 => 55,  151 => 54,  147 => 52,  144 => 51,  136 => 50,  133 => 49,  122 => 48,  120 => 47,  117 => 46,  115 => 45,  112 => 44,  108 => 42,  103 => 39,  97 => 37,  93 => 35,  91 => 34,  87 => 32,  85 => 31,  82 => 30,  79 => 29,  73 => 27,  65 => 25,  62 => 24,  60 => 23,  57 => 22,  54 => 21,  48 => 19,  40 => 17,  37 => 16,  35 => 15,  32 => 14,  30 => 13,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
