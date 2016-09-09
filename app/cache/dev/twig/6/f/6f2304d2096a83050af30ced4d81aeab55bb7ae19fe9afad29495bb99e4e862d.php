<?php

/* ClassroomBundle:Classroom:classroom-discussions.html.twig */
class __TwigTemplate_6f2304d2096a83050af30ced4d81aeab55bb7ae19fe9afad29495bb99e4e862d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "ClassroomBundle:Classroom:classroom-discussions.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-discussions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的话题 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的话题</div>

  <div class=\"panel-body\">
    ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:MyThread:tab.html.twig", "ClassroomBundle:Classroom:classroom-discussions.html.twig", 13)->display($context);
        // line 14
        echo "    ";
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 15
            echo "
    ";
            // line 16
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "discussion")) : ("discussion"));
            // line 17
            echo "
    <ul class=\"media-list\">
      ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 20
                echo "       ";
                if ((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms"))) {
                    // line 21
                    echo "        ";
                    $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array"), null)) : (null));
                    // line 22
                    echo "        <li class=\"media\">
            <div class=\"media-body\">
              ";
                    // line 24
                    if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                        // line 25
                        echo "                <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                        echo "</span>
              ";
                    }
                    // line 27
                    echo "              <div class=\"mbm\">
                ";
                    // line 28
                    if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                        // line 29
                        echo "                  <span class=\"label label-info\" title=\"问答帖\">问</span>
                ";
                    }
                    // line 31
                    echo "
                <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_show", array("classroomId" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                    echo "</strong></a>

                ";
                    // line 34
                    if ($this->getAttribute($context["thread"], "nice", array())) {
                        // line 35
                        echo "                  <span class=\"label label-warning\" title=\"精华帖\">精</span>
                ";
                    }
                    // line 37
                    echo "
              </div>
              <div class=\"text-muted text-normal\">
                ";
                    // line 40
                    if ((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                        // line 41
                        echo "                  <span>发表于";
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
                        echo "\" class=\"link-muted\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
                        echo "</a></span>
                ";
                    } else {
                        // line 43
                        echo "                  <span>";
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "已删除</span>
                ";
                    }
                    // line 45
                    echo "                <span class=\"bullet\">•</span>
                ";
                    // line 46
                    if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                        // line 47
                        echo "                  ";
                        $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["thread"], "lastPostUserId", array()), array(), "array");
                        // line 48
                        echo "                  <span>最后回复 ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : $this->getContext($context, "poster")), 1 => "link-muted"), "method"), "html", null, true);
                        echo "</span>
                  ,
                  <span>";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "lastPostTime", array())), "html", null, true);
                        echo "</span>
                  <span class=\"bullet\">•</span>
                ";
                    }
                    // line 53
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
                    echo "浏览</span>
              </div>
            </div>
          </li>
        ";
                } else {
                    // line 58
                    echo "          ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
                        // line 59
                        echo "            <li class=\"empty\">你还没提过问题</li>
          ";
                    } else {
                        // line 61
                        echo "            <li class=\"empty\">你还没发表过话题</li>
          ";
                    }
                    // line 63
                    echo "
        ";
                }
                // line 65
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
    </ul>
    <nav class=\"text-center\">
      ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo " 
    </nav>

    ";
        } else {
            // line 74
            echo "      <div class=\"empty\">你还没有发表过话题</div>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 76,  196 => 74,  189 => 70,  184 => 67,  177 => 65,  173 => 63,  169 => 61,  165 => 59,  162 => 58,  153 => 53,  147 => 50,  141 => 48,  138 => 47,  136 => 46,  133 => 45,  127 => 43,  117 => 41,  115 => 40,  110 => 37,  106 => 35,  104 => 34,  97 => 32,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  79 => 25,  77 => 24,  73 => 22,  70 => 21,  67 => 20,  63 => 19,  59 => 17,  57 => 16,  54 => 15,  51 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
