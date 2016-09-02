<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\group-thread.tpl.html.twig */
class __TwigTemplate_c3f1faed58ec600c20c89864ebee06612fd7e44d6d56c13a59c9d7c95c7807ce extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
\t     ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array());
        // line 8
        echo "\t    
\t     ";
        // line 9
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "delete")) {
            // line 10
            echo "\t     \t    您的话题 <strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong>被<a href =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</a>删除。
\t     ";
        } elseif (($this->getAttribute(        // line 11
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "elite")) {
            // line 12
            echo "\t     \t    您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被设为精华。
\t     ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "unelite")) {
            // line 14
            echo "\t      \t  您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被取消精华。
\t     ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "top")) {
            // line 16
            echo "\t     \t    您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被置顶。
        ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "untop")) {
            // line 18
            echo "\t\t\t      您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被取消置顶。
        ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "close")) {
            // line 20
            echo "         \t  您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被关闭。
        ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "open")) {
            // line 22
            echo "         \t  您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "groupId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被打开。
        ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "modify")) {
            // line 24
            echo "            您的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被管理员编辑。<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'>点击查看</a>
        ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "collect")) {
            // line 26
            echo "            用户<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</a>已经收藏了你的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>！
        ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "uncollect")) {
            // line 28
            echo "            用户<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</a>已经取消收藏你的话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>！
        ";
        } elseif (($this->getAttribute(        // line 29
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "reply")) {
            // line 30
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</strong></a>在话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>中回复了您。<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "page", array()), "html", null, true);
            echo "#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "post", array()), "html", null, true);
            echo "\" target='_blank'>点击查看</a>
        ";
        } elseif (($this->getAttribute(        // line 31
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "delete-post")) {
            // line 32
            echo "            您在话题<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "threadId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>的回复被删除。
        ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "type-modify")) {
            // line 34
            echo "            ";
            $context["url"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetType", array()) . "_thread_show");
            // line 35
            echo "            ";
            $context["urlId"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetType", array()) . "Id");
            echo "  
            您的话题<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetType", array()) . "_thread_show"), array(($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetType", array()) . "Id") => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetId", array()), "threadId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "targetId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>“";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array()), "html", null, true);
            echo "”</strong></a>被<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</strong></a>编辑
\t \t ";
        }
        // line 38
        echo "    </div>
    <div class=\"notification-footer\">
     ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\group-thread.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 40,  183 => 38,  172 => 36,  167 => 35,  164 => 34,  162 => 33,  155 => 32,  153 => 31,  136 => 30,  134 => 29,  123 => 28,  121 => 27,  110 => 26,  108 => 25,  99 => 24,  97 => 23,  90 => 22,  88 => 21,  81 => 20,  79 => 19,  72 => 18,  70 => 17,  63 => 16,  61 => 15,  54 => 14,  52 => 13,  45 => 12,  43 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
