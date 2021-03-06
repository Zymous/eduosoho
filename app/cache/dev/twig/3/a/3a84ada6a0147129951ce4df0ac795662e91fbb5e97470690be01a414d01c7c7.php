<?php

/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_3a84ada6a0147129951ce4df0ac795662e91fbb5e97470690be01a414d01c7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 1);
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
        $context["side_nav"] = "my-group";
        // line 6
        $context["tab_nav"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-center.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 8, "1754290445")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_3a84ada6a0147129951ce4df0ac795662e91fbb5e97470690be01a414d01c7c7_1754290445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 8);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo " 
        我的小组
      ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "          <div class=\"row\">

            <div class=\"col-md-12\">

              ";
        // line 18
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 18)->display($context);
        // line 19
        echo "
              <div class=\"page-header\">
                <h4> 我加入的小组<a class=\"badge pull-right\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["groupsCount"]) ? $context["groupsCount"] : $this->getContext($context, "groupsCount")), "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 24)->display(array_merge($context, array("groups" =>         // line 25
(isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")))));
        // line 27
        echo "
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>我发起的话题<a class=\"badge pull-right\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["threadsCount"]) ? $context["threadsCount"] : $this->getContext($context, "threadsCount")), "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 36
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 36)->display(array_merge($context, array("threads" =>         // line 37
(isset($context["ownThreads"]) ? $context["ownThreads"] : $this->getContext($context, "ownThreads")), "groups" =>         // line 38
(isset($context["groupsAsOwnThreads"]) ? $context["groupsAsOwnThreads"] : $this->getContext($context, "groupsAsOwnThreads")))));
        // line 40
        echo "              
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>回复的话题<a class=\"badge pull-right\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["postsCount"]) ? $context["postsCount"] : $this->getContext($context, "postsCount")), "html", null, true);
        echo "</a></h4>
              </div>
              
              ";
        // line 49
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 49)->display(array_merge($context, array("lastPostMembers" =>         // line 50
(isset($context["postLastPostMembers"]) ? $context["postLastPostMembers"] : $this->getContext($context, "postLastPostMembers")), "groups" =>         // line 51
(isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : $this->getContext($context, "groupsAsPostThreads")), "threads" =>         // line 52
(isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")), "user" =>         // line 53
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 55
        echo "              
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>收藏的话题<a class=\"badge pull-right\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("group_thread_collecting");
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["collectCount"]) ? $context["collectCount"] : $this->getContext($context, "collectCount")), "html", null, true);
        echo "</a></h4>
              </div>
              
              ";
        // line 64
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:group-member-center.html.twig", 64)->display(array_merge($context, array("lastPostMembers" =>         // line 65
(isset($context["collectLastPostMembers"]) ? $context["collectLastPostMembers"] : $this->getContext($context, "collectLastPostMembers")), "groups" =>         // line 66
(isset($context["groupsAsCollectThreads"]) ? $context["groupsAsCollectThreads"] : $this->getContext($context, "groupsAsCollectThreads")), "threads" =>         // line 67
(isset($context["collectThreads"]) ? $context["collectThreads"] : $this->getContext($context, "collectThreads")), "user" =>         // line 68
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 70
        echo "              
            </div>

          </div>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  186 => 68,  185 => 67,  184 => 66,  183 => 65,  182 => 64,  174 => 61,  166 => 55,  164 => 53,  163 => 52,  162 => 51,  161 => 50,  160 => 49,  152 => 46,  144 => 40,  142 => 38,  141 => 37,  140 => 36,  132 => 33,  124 => 27,  122 => 25,  121 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
