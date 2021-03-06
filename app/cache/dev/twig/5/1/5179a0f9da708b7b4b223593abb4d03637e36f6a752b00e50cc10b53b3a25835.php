<?php

/* TopxiaAdminBundle:System:user-fields.modal.html.twig */
class __TwigTemplate_5179a0f9da708b7b4b223593abb4d03637e36f6a752b00e50cc10b53b3a25835 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"myModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">添加字段</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("admin_user_fields_add");
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=
             \"field_title\">字段名称</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_title\" id=\"field_title\"  class=\"form-control\" value=\"\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_type\">字段类型</label>
              <div class=\"col-md-6 controls\">
                  <select class=\"form-control\" name=\"field_type\" id=\"field_type\">
                    <option value=\"\" num=\"\">请选择</option>
                    <option value =\"varchar\" num=\"还可以添加";
        // line 24
        echo twig_escape_filter($this->env, (10 - (isset($context["varcharCount"]) ? $context["varcharCount"] : $this->getContext($context, "varcharCount"))), "html", null, true);
        echo "个字段\" ";
        if (((isset($context["varcharCount"]) ? $context["varcharCount"] : $this->getContext($context, "varcharCount")) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">文本";
        if (((isset($context["varcharCount"]) ? $context["varcharCount"] : $this->getContext($context, "varcharCount")) == 10)) {
            echo "(已满10个)";
        }
        echo "</option>
                    <option value =\"text\" num=\"还可以添加";
        // line 25
        echo twig_escape_filter($this->env, (10 - (isset($context["textCount"]) ? $context["textCount"] : $this->getContext($context, "textCount"))), "html", null, true);
        echo "个字段\" ";
        if (((isset($context["textCount"]) ? $context["textCount"] : $this->getContext($context, "textCount")) == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">多行文本";
        if (((isset($context["textCount"]) ? $context["textCount"] : $this->getContext($context, "textCount")) == 10)) {
            echo "(已满10个)";
        }
        echo "</option>
                    <option value=\"int\" num=\"还可以添加";
        // line 26
        echo twig_escape_filter($this->env, (5 - (isset($context["intCount"]) ? $context["intCount"] : $this->getContext($context, "intCount"))), "html", null, true);
        echo "个字段,最大值为9位整数\" ";
        if (((isset($context["intCount"]) ? $context["intCount"] : $this->getContext($context, "intCount")) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">整数";
        if (((isset($context["intCount"]) ? $context["intCount"] : $this->getContext($context, "intCount")) == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                    <option value=\"float\" num=\"还可以添加";
        // line 27
        echo twig_escape_filter($this->env, (5 - (isset($context["floatCount"]) ? $context["floatCount"] : $this->getContext($context, "floatCount"))), "html", null, true);
        echo "个字段,保留到两位小数\" ";
        if (((isset($context["floatCount"]) ? $context["floatCount"] : $this->getContext($context, "floatCount")) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">小数";
        if (((isset($context["floatCount"]) ? $context["floatCount"] : $this->getContext($context, "floatCount")) == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                    <option value=\"date\" num=\"还可以添加";
        // line 28
        echo twig_escape_filter($this->env, (5 - (isset($context["dateCount"]) ? $context["dateCount"] : $this->getContext($context, "dateCount"))), "html", null, true);
        echo "个字段\" ";
        if (((isset($context["dateCount"]) ? $context["dateCount"] : $this->getContext($context, "dateCount")) == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">日期";
        if (((isset($context["dateCount"]) ? $context["dateCount"] : $this->getContext($context, "dateCount")) == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                  </select>
                  <div class=\"help-block\" id=\"type_num\" style=\"color:green;\" ></div>
              </div>
            </div> 

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_seq\">显示序号</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_seq\" id=\"field_seq\" class=\"form-control\" value=\"1\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\">是否启用、显示</label>
             <div class=\"col-md-2\"><input type=\"checkbox\"  checked=checked name=\"field_enabled\" vaule=\"1\" style=\"height:18px;width:18px;\"></div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"add-btn\">保存</button>
      </div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  95 => 28,  83 => 27,  71 => 26,  59 => 25,  47 => 24,  28 => 8,  19 => 1,);
    }
}
