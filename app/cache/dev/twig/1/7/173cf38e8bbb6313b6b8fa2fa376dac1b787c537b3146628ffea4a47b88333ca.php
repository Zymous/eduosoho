<?php

/* TopxiaAdminBundle:CourseQuestion:index.html.twig */
class __TwigTemplate_173cf38e8bbb6313b6b8fa2fa376dac1b787c537b3146628ffea4a47b88333ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "course/questions";
        // line 5
        $context["menu"] = "admin_course_question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("TopxiaAdminBundle:CourseQuestion:tab.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 9)->display($context);
        // line 10
        echo "<br>

  <div class=\"well well-sm mtl\">
    <form class=\"form-inline\">

      <div class=\"form-group\">
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => "标题", "content" => "内容", "courseId" => "课程编号", "courseTitle" => "课程名"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
      </div>
      
      <span class=\"divider\"></span>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
      </div>


      <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
    </form>
  </div>

  <div id=\"question-table-container\">
    <table id=\"question-table\" class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">问答</th>
          ";
        // line 42
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
            // line 43
            echo "            <th width=\"10%\">查看</th>
          ";
        } elseif ((        // line 44
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            // line 45
            echo "            <th width=\"10%\">回复/查看</th>
          ";
        }
        // line 47
        echo "          <th width=\"10%\">作者</th>
          <th width=\"10%\">创建时间</th>
          <th width=\"15%\">操作</th>
        </tr>
      </thead>
      <tbody class=\"tbody\">
        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 54
            echo "        
          ";
            // line 55
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["question"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["question"], "userId", array()), array(), "array"), null)) : (null));
            // line 56
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
            // line 57
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["question"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["question"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 58
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 64
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["question"], "content", array()), 60);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 65
            echo $this->getAttribute($context["question"], "content", array());
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 69
            if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                // line 70
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 71
                if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                    // line 72
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "courseId", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array()), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 75
                echo "                ";
            }
            // line 76
            echo "              </div>
            </td>
            <td>
            <span class=\"text-sm\">
              ";
            // line 80
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
                // line 81
                echo "               ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
               ";
            } elseif ((            // line 82
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
                // line 83
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "postNum", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
                ";
            }
            // line 85
            echo "            </span>
            </td>
            <td>
              ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author"))), "method"), "html", null, true);
            echo " <br />
            </td>
            <td>
              ";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
            </td>
            <td>
            ";
            // line 94
            $this->loadTemplate("TopxiaAdminBundle:CourseQuestion:td-operations.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 94)->display($context);
            // line 95
            echo "            </td>
          </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 98
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无问答记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "      </tbody>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"问答\" data-url=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("admin_thread_batch_delete");
        echo "\">删除</button>
    </div>
  </div>
    
  ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 109,  258 => 105,  251 => 100,  244 => 98,  229 => 95,  227 => 94,  221 => 91,  215 => 88,  210 => 85,  202 => 83,  200 => 82,  195 => 81,  193 => 80,  187 => 76,  184 => 75,  173 => 73,  170 => 72,  168 => 71,  161 => 70,  159 => 69,  152 => 65,  148 => 64,  140 => 61,  135 => 59,  132 => 58,  129 => 57,  126 => 56,  124 => 55,  121 => 54,  103 => 53,  95 => 47,  91 => 45,  89 => 44,  86 => 43,  84 => 42,  67 => 28,  58 => 22,  50 => 17,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
