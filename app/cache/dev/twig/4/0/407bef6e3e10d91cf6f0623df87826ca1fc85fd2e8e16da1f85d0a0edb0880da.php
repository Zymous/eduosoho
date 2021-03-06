<?php

/* TopxiaWebBundle:CourseFileManage:modal-upload-course-files.html.twig */
class __TwigTemplate_407bef6e3e10d91cf6f0623df87826ca1fc85fd2e8e16da1f85d0a0edb0880da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseFileManage:modal-upload-course-files.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "courselesson")) {
            echo " 上传课时文件 
  ";
        } elseif ((        // line 7
(isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "coursematerial")) {
            echo " 上传资料文件 
  ";
        } elseif ((        // line 8
(isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "materiallib")) {
            echo " 上传文件到教学资料库
  ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
<style>
  .plupload_filelist_footer {
    height: 40px;
    line-height: 20px;
  }


</style>

\t<div id=\"file-uploader-container\" 
    class=\"mbl\" 
    data-target-type=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\" 
    data-upload-mode=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"

    >
\t
     <div
      id=\"file-chooser-uploader-div\"
      data-role=\"uploader-div\"
      data-upload-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_upload", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        echo "\"
      data-params-url=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        echo "\"
      ";
        // line 36
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
            // line 37
            echo "        data-callback=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "lazyConvert" => 1)), "html", null, true);
            echo "\"
      ";
        }
        // line 39
        echo "     ></div>
\t
\t</div>

  ";
        // line 43
        if ((((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "courselesson") || ((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "materiallib"))) {
            // line 44
            echo "    <div class=\"alert alert-info\">
      <ul>
        ";
            // line 46
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
                // line 47
                echo "          <li>支持<strong>mp3, mp4, avi, flv, wmv, mov, ppt, pptx, pdf, doc, docx, swf</strong>格式的文件上传，文件大小不能超过<strong>1 GB</strong>。</li>
          <li>视频将上传到<strong>云服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
        ";
            } else {
                // line 50
                echo "          <li>支持<strong>mp4, mp3</strong>格式的文件上传，且文件大小不能超过<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
                echo "</strong>。<br>MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
          <li>视频将上传到<strong>网站服务器</strong>，如需使用";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
                echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</li>
        ";
            }
            // line 53
            echo "      </ul>
    </div>

    ";
            // line 56
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
                // line 57
                echo "    <div class=\"quality-switcher\">
      <div class=\"quality-switcher-bar\">
        视频转码类型<span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </div>
      <div class=\"quality-switcher-control\">
        <div class=\"video-quality radios\">
          画质：
        ";
                // line 64
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()), "low")) : ("low")));
                echo "
        </div>

        <div class=\"audio-quality radios\">
          音质：
          ";
                // line 69
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()), "low")) : ("low")));
                echo "
        </div>

        <div class=\"quality-actions\">
          <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
          <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
        </div>
      </div>
    </div>
    ";
            }
            // line 79
            echo "  ";
        } elseif (((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "coursematerial")) {
            // line 80
            echo "    <div class=\"alert alert-info\">
      <ul>
        <li>支持常见文档、图片、音视频、压缩包文件格式。";
            // line 82
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "local")) {
                echo "且文件大小不能超过<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
                echo "</strong>。";
            }
            echo "</li>
        ";
            // line 83
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
                // line 84
                echo "          <li>文件将上传到<strong>云服务器</strong>。</li>
        ";
            } else {
                // line 86
                echo "          <li>视频将上传到<strong>网站服务器</strong>，如需使用";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
                echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</li>
        ";
            }
            // line 88
            echo "      </ul>
    </div>
  ";
        }
        // line 91
        echo "
  <script>app.load('course-manage-file/upload-course-files')</script>

";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:modal-upload-course-files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 97,  208 => 96,  201 => 91,  196 => 88,  190 => 86,  186 => 84,  184 => 83,  176 => 82,  172 => 80,  169 => 79,  156 => 69,  148 => 64,  139 => 57,  137 => 56,  132 => 53,  127 => 51,  122 => 50,  117 => 47,  115 => 46,  111 => 44,  109 => 43,  103 => 39,  97 => 37,  95 => 36,  91 => 35,  87 => 34,  77 => 27,  73 => 26,  69 => 25,  55 => 13,  52 => 12,  45 => 8,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
