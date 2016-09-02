<?php

/* TopxiaWebBundle:Review:Widget/list.html.twig */
class __TwigTemplate_1a3cbbbd9e87eadfce08944029e2dad89b1c5052b5664b78ca99146a6189d561 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("review/list");
        // line 2
        if (((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")) && ((array_key_exists("canReview", $context)) ? (_twig_default_filter((isset($context["canReview"]) ? $context["canReview"] : $this->getContext($context, "canReview")), 1)) : (1)))) {
            // line 3
            echo "  <div class=\"clearfix\">
    <button class=\"btn btn-primary btn-sm pull-right js-show-review-form\" ";
            // line 4
            if ( !(isset($context["userReview"]) ? $context["userReview"] : $this->getContext($context, "userReview"))) {
                echo "style=\"display:none;\"";
            }
            echo ">重新评价</button>
  </div>

  <form id=\"review-form\" method=\"post\" action=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["reviewSaveUrl"]) ? $context["reviewSaveUrl"] : $this->getContext($context, "reviewSaveUrl")), "html", null, true);
            echo "\" ";
            if ((isset($context["userReview"]) ? $context["userReview"] : $this->getContext($context, "userReview"))) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <div class=\"form-group controls\">
      请打分： <span data-rating=\"";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\" data-img-path=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
            echo "\" class=\"rating-btn\"></span>
      <input type=\"hidden\" name=\"rating\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\">
    </div>

    <div class=\"form-group controls\">
      <textarea class=\"form-control\" rows=\"8\" data-display=\"评价详细内容\" name=\"content\">";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
    </div>

    <div class=\"form-group clearfix\">
      <span class=\"text-success pull-left\" style=\"display: none;\">评价已保存！</span>
      <button type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"正在保存...\" autocomplete=\"off\">保存</button>
      <button class=\"btn btn-link pull-right js-hide-review-form\" type=\"button\" ";
            // line 20
            if ((isset($context["userReview"]) ? $context["userReview"] : $this->getContext($context, "userReview"))) {
                echo "style=\"display:none;\"";
            }
            echo ">取消</button>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 28
                echo "  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 29
                echo "  <div class=\"js-reviews\">
    <div class=\"media media-evaluate\">
      <div class=\"media-left\">
        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
      </div>
      <div class=\"media-body\">
        <div class=\"title\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d"), "html", null, true);
                echo "</div>
        <div class=\"score\">
          ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "star", array(0 => $this->getAttribute($context["review"], "rating", array())), "method"), "html", null, true);
                echo "
        </div>
        <div class=\"content\">
            <div class=\"short-content\">";
                // line 40
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["review"], "content", array()), 100);
                echo "</div>
            <div class=\"full-content\" style=\"display:none;\">";
                // line 41
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
                echo "</div>
        </div>
        <div class=\"actions\">
          <a href=\"javascript:;\" class=\"show-full-btn\">[展开全文]</a>
          <a href=\"javascript:;\" class=\"show-short-btn\" style=\"display:none;\">[收起全文]</a>
        </div>
      </div>
    </div>
  </div>

";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 52
            echo "  <div class=\"empty\">暂无评价</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), null)) : (null))) {
            // line 56
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Review:Widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  146 => 55,  143 => 54,  136 => 52,  119 => 41,  115 => 40,  109 => 37,  102 => 35,  96 => 32,  91 => 29,  88 => 28,  82 => 27,  79 => 26,  73 => 23,  65 => 20,  56 => 14,  49 => 10,  43 => 9,  34 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
