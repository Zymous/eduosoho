<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_95e1c8a6b638a4535519973ac81769df3a3c06507278a9f3615e4878c298c07d extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 11
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array())) {
            // line 12
            echo "      <span class=\"label label-default\">荐:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 14
        echo "    </td>

    <td>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 19
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array") > 0)) {
            // line 20
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">详情</a>
    </strong>
    ";
        }
        // line 24
        echo "    </td>

    <td>
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 32
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 33
            echo "               ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 35
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo "元
            ";
        }
        // line 37
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 42
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 43
            echo "        原价 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coinPriceAll"]) ? $context["coinPriceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
      ";
        } else {
            // line 45
            echo "        原价 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priceAll"]) ? $context["priceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo "元
      ";
        }
        // line 47
        echo "    </span>


    </td>

    <td>
    ";
        // line 53
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 54
            echo "    <span style=\"color: #090;\">已发布</span>
    ";
        } elseif (($this->getAttribute(        // line 55
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 56
            echo "    
    <span style=\"color: #900;\">已关闭</span>
    ";
        } else {
            // line 59
            echo "    未发布
    ";
        }
        // line 61
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

 <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-edit\"></span> 管理";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a></li>
        
        ";
        // line 75
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array())) {
            // line 76
            echo "          <li><a class=\"cancel-recommend-classroom\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_cancel_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\" title=\"取消";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "推荐\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        } else {
            // line 78
            echo "          <li><a class=\"recommend-classroom\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 80
        echo "          
       ";
        // line 81
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 82
            echo "       <li><a href=\"javascript:\" class=\"close-classroom\" title=\"关闭";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_close", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>

       <li><a href=\"javascript:\" title=\"发送发布";
            // line 84
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")通知短信\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sms_prepare", array("targetType" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><span class=\"glyphicon glyphicon-envelope\"></span> 发送发布通知短信</a></li>

       ";
        } else {
            // line 87
            echo "       <li><a href=\"javascript:\" class=\"open-classroom\" title=\"发布";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_open", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>发布";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>

       ";
        }
        // line 90
        echo "
       ";
        // line 91
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "draft")) {
            // line 92
            echo "      <li><a href=\"javascript:\" class=\"delete-classroom\" title=\"删除";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_delete", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span> 删除";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 94
        echo "  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  236 => 92,  234 => 91,  231 => 90,  218 => 87,  208 => 84,  196 => 82,  194 => 81,  191 => 80,  183 => 78,  175 => 76,  173 => 75,  166 => 73,  152 => 61,  148 => 59,  143 => 56,  141 => 55,  138 => 54,  136 => 53,  128 => 47,  122 => 45,  114 => 43,  112 => 42,  105 => 37,  99 => 35,  91 => 33,  89 => 32,  81 => 27,  76 => 24,  70 => 21,  67 => 20,  65 => 19,  60 => 17,  55 => 14,  47 => 12,  45 => 11,  41 => 10,  33 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }
}
