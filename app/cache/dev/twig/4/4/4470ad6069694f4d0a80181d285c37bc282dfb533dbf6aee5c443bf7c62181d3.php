<?php

/* TopxiaWebBundle:CourseTestpaperManage:items.html.twig */
class __TwigTemplate_4470ad6069694f4d0a80181d285c37bc282dfb533dbf6aee5c443bf7c62181d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:items.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "testpaper";
        // line 6
        $context["script_controller"] = "testpaper/item-manager";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "试卷题目管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>
tr.placeholder {
  display: block;
  background: red;
  position: relative;
  margin: 0;
  padding: 0;
  border: none;
}
tr.placeholder:before {
    content: \"\";
    position: absolute;
    width: 0;
    height: 0;
    border: 5px solid transparent;
    border-left-color: red;
    margin-top: -5px;
    left: -5px;
    border-right: none;
}
</style>

<div class=\"panel panel-default panel-col\" id=\"testpaper-items-manager\">
  <div class=\"panel-heading\">
    ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "name", array()), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body clearfix\">

    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">试卷管理</a></li>
        <li class=\"active\">试卷题目管理</li>
    </ol>

    <div class=\"clearfix mbm\">
      <button data-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_item_picker", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm pull-right\" data-role=\"pick-item\"><span class=\"glyphicon glyphicon-plus\"></span> 新增试题</button>
      <ul class=\"nav nav-pills nav-mini\">
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : $this->getContext($context, "testpaper")), "metas", array(), "array"), "question_type_seq", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 48
            echo "          <li><a href=\"javascript:\" data-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" data-name=\"";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $context["type"]);
            echo "\" class=\"testpaper-nav-link\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $context["type"]);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </ul>
    </div>

    <form  method=\"post\" id=\"testpaper-items-form\" class=\"form-horizontal\">
      <div id=\"testpaper-stats\" class=\"text-success\"></div>
      <table class=\"table table-striped table-hover tab-content\" id=\"testpaper-table\">
        <thead>
          <tr>
            <th></th>
            <th><input type=\"checkbox\" data-role=\"batch-select\"></th>
            <th>题号</th>
            <th width=\"40%\">题干</th>
            <th>类型</th>
            <th>难度</th>
            <th width=\"8%\">分值</th>
            <th>操作</th>
          </tr>
        </thead>

        ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
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
        foreach ($context['_seq'] as $context["type"] => $context["typeItems"]) {
            // line 70
            echo "          <tbody data-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" id=\"testpaper-items-";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" class=\"hide testpaper-table-tbody\">
            ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["typeItems"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 72
                echo "              ";
                $context["question"] = $this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $this->getAttribute($context["item"], "questionId", array()), array(), "array");
                // line 73
                echo "              ";
                $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:items.html.twig", 73)->display($context);
                // line 74
                echo "              ";
                if ((($this->getAttribute((isset($context["subItems"]) ? $context["subItems"] : null), $this->getAttribute($context["item"], "questionId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["subItems"]) ? $context["subItems"] : null), $this->getAttribute($context["item"], "questionId", array()), array(), "array"), null)) : (null))) {
                    // line 75
                    echo "                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subItems"]) ? $context["subItems"] : $this->getContext($context, "subItems")), $this->getAttribute($context["item"], "questionId", array()), array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 76
                        echo "                  ";
                        $context["question"] = $this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $this->getAttribute($context["item"], "questionId", array()), array(), "array");
                        // line 77
                        echo "                  ";
                        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:items.html.twig", 77)->display($context);
                        // line 78
                        echo "                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "              ";
                }
                // line 80
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          </tbody>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['typeItems'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </table>

      <div>
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
        <button type=\"button\" class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"题目\">删除</button>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-8 controls\">
          <div class=\"passedScoreDiv\" ";
        // line 92
        if ((isset($context["hasEssay"]) ? $context["hasEssay"] : $this->getContext($context, "hasEssay"))) {
            echo "style=\"display:none\"";
        }
        echo ">这是一份纯客观题的试卷, 达到 <input type=\"text\" name=\"passedScore\" class=\"form-control width-input width-input-small\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["passedScoreDefault"]) ? $context["passedScoreDefault"] : $this->getContext($context, "passedScoreDefault")), "html", null, true);
        echo "\" data-score-total=\"0\" />分（含）可以自动审阅通过考试。</div>
        </div>
        <div class=\"col-md-4 controls\">
          <button type=\"button\" class=\"btn btn-primary pull-right mlm request-save\">保存</button>
        </div>
      </div>
      
      
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>

  <div id=\"testpaper-confirm-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">确认试卷题目信息</h4>
        </div>
        <div class=\"modal-body\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>题目类型</th>
                <th>题目数量</th>
                <th>总分值</th>
              </tr>
            </thead>
            <tbody class=\"detail-tbody\"></tbody>
          </table>
          
        </div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-link\" data-dismiss=\"modal\" type=\"button\">关闭</button>
          <button type=\"button\" class=\"btn btn-primary confirm-submit\" data-saving-text=\"正在保存...\">确定</button>
        </div>
      </div>
    </div>
  </div>

  <script type=\"text/x-handlebars-template\" data-role=\"confirm-tr-template\">
    ";
        // line 139
        echo "
      <tr>
        <td>{{name}}</td>
        <td>{{count}}题</td>
        <td>{{score}}分</td>
      </tr>
    ";
        echo "
  </script>

</div>





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 139,  277 => 100,  262 => 92,  251 => 83,  236 => 81,  222 => 80,  219 => 79,  205 => 78,  202 => 77,  199 => 76,  181 => 75,  178 => 74,  175 => 73,  172 => 72,  155 => 71,  148 => 70,  131 => 69,  110 => 50,  97 => 48,  93 => 47,  88 => 45,  80 => 40,  71 => 34,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
