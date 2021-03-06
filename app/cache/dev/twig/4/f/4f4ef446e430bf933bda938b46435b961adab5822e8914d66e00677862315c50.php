<?php

/* TopxiaWebBundle:Importer:import.step1.html.twig */
class __TwigTemplate_4f4ef446e430bf933bda938b46435b961adab5822e8914d66e00677862315c50 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Importer:import.step1.html.twig", 1);
        // line 3
        $this->env->getExtension('topxia_web_twig')->loadScript("importer/lead-excel");
        // line 4
        echo "  
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员批量导入</div>
  <div class=\"panel-body\">
    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
      ";
        // line 9
        echo $context["web_macro"]->getflash_messages();
        echo "
      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-4 control-label\">
          选择要导入的文件
        </label>
        <div class=\"col-md-8 controls\">
            <div class=\"uploader blue\">
              <input type=\"text\" class=\"filename\" readonly=\"readonly\"/>
              <input type=\"button\" name=\"excel\" class=\" button\" value=\"浏览...\"/>
              <input type=\"file\" size=\"30\" name=\"excel\"/>
            </div>&nbsp;&nbsp;<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "excel_example", array())), "html", null, true);
        echo "\">点击下载示例说明文件</a>
            <br>
            支持从Excel文件导入
        </div>  
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-offset-4 col-md-8 controls\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\">开始校验数据</button>
        </div>
      </div>
    </form>
  </div>
</div>

<style>.uploader{
position:relative;
display:inline-block;
overflow:hidden;
cursor:default;
padding:0px;
margin:0px 0px;
-moz-box-shadow:0px 0px 5px #ddd;
-webkit-box-shadow:0px 0px 5px #ddd;
box-shadow:0px 0px 5px #ddd;

-moz-border-radius:5px;
-webkit-border-radius:5px;
border-radius:5px;
}

.filename{
float:left;
display:inline-block;
outline:0 none;
height:32px;
width:180px;
margin:0;
padding:8px 10px;
overflow:hidden;
cursor:default;
border:1px solid;
border-right:0;
font:9pt/100% Arial, Helvetica, sans-serif; color:#777;
text-shadow:1px 1px 0px #fff;
text-overflow:ellipsis;
white-space:nowrap;

-moz-border-radius:5px 0px 0px 5px;
-webkit-border-radius:5px 0px 0px 5px;
border-radius:5px 0px 0px 5px;

background:#f5f5f5;
background:-moz-linear-gradient(top, #fafafa 0%, #eee 100%);
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#fafafa), color-stop(100%,#f5f5f5));
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#f5f5f5',GradientType=0);
border-color:#ccc;

-moz-box-shadow:0px 0px 1px #fff inset;
-webkit-box-shadow:0px 0px 1px #fff inset;
box-shadow:0px 0px 1px #fff inset;

-moz-box-sizing:border-box;
-webkit-box-sizing:border-box;
box-sizing:border-box;
}

.button{
float:left;
height:32px;
display:inline-block;
outline:0 none;
padding:8px 12px;
margin:0;
cursor:pointer;
border:1px solid;
font:bold 9pt/100% Arial, Helvetica, sans-serif;

-moz-border-radius:0px 5px 5px 0px;
-webkit-border-radius:0px 5px 5px 0px;
border-radius:0px 5px 5px 0px;

-moz-box-shadow:0px 0px 1px #fff inset;
-webkit-box-shadow:0px 0px 1px #fff inset;
box-shadow:0px 0px 1px #fff inset;
}


.uploader input[type=file]{
position:absolute;
top:0; right:0; bottom:0;
border:0;
padding:0; margin:0;
height:30px;
cursor:pointer;
filter:alpha(opacity=0);
-moz-opacity:0;
-khtml-opacity: 0;
opacity:0;
}

input[type=button]::-moz-focus-inner{padding:0; border:0 none; -moz-box-sizing:content-box;}
input[type=button]::-webkit-focus-inner{padding:0; border:0 none; -webkit-box-sizing:content-box;}
input[type=text]::-moz-focus-inner{padding:0; border:0 none; -moz-box-sizing:content-box;}
input[type=text]::-webkit-focus-inner{padding:0; border:0 none; -webkit-box-sizing:content-box;}

.blue .button{
color:#fff;
text-shadow:1px 1px 0px #09365f;
background:#064884;
background:-moz-linear-gradient(top, #3b75b4 0%, #064884 100%);
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#3b75b4), color-stop(100%,#064884));
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3b75b4', endColorstr='#064884',GradientType=0);
border-color:#09365f;
}

.blue:hover .button{
background:#3b75b4;
background:-moz-linear-gradient(top, #064884 0%, #3b75b4 100%);
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#064884), color-stop(100%,#3b75b4));
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#064884', endColorstr='#3b75b4',GradientType=0);
}
</style>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Importer:import.step1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 26,  43 => 19,  30 => 9,  23 => 4,  21 => 3,  19 => 1,);
    }
}
