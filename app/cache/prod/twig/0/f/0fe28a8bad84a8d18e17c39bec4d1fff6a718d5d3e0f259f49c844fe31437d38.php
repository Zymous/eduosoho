<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_0fe28a8bad84a8d18e17c39bec4d1fff6a718d5d3e0f259f49c844fe31437d38 extends Twig_Template
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
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\" data-toggle=\"tab\">上传视频</a></li>
        ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 19
            echo "        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            从资料库中选择
          </a>
        </li>
        ";
        }
        // line 25
        echo "
        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

        <li><a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入网络视频</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">




";
        // line 42
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 43
            echo "  <div class=\"video-quality-switcher\">
    <div>
      <label>视频转码类型：</label>
      <span class=\"quality-switcher-bar\">
        <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </span>
    </div>

    <div class=\"quality-switcher-control\">
      <div class=\"video-quality radios\">
        画质：
        ";
            // line 54
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
                // line 55
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality", array()), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 57
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()), "low")) : ("low")));
                echo "
        ";
            }
            // line 59
            echo "      </div>

      <div class=\"audio-quality radios\">
        音质：
        ";
            // line 63
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
                // line 64
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality", array()), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 66
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()), "low")) : ("low")));
                echo "
          ";
            }
            // line 68
            echo "      </div>

      <div class=\"quality-actions\">
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
        <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
      </div>
    </div>
  </div>
  ";
        }
        // line 77
        echo "            <div class=\"file-chooser-uploader-label\">选择你要上传的视频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"video-choose-uploader-btn\"
                data-role=\"uploader-btn\"
                data-filetypes=\"";
        // line 81
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "*.mp4;*.avi;*.flv;*.wmv;*.mov;*.m4v";
        } else {
            echo "*.mp4";
        }
        echo "\"
                data-button-image=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 83
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#video-chooser-progress\"
                data-storage-type=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"video-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 103
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 104
            echo "                  <li>支持<strong>mp4, avi, flv, wmv, mov, m4v</strong>格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。</li>
                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
                ";
        } else {
            // line 108
            echo "                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
                  <li>
                    视频将上传到<strong>网站服务器</strong>。如需使用";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情,";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。
                  </li>
                ";
        }
        // line 113
        echo "              </ul>
            </div>

          </div>

        </div>
\t";
        // line 119
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 120
            echo "          <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
              <div id=\"file-browser-video\" data-role=\"file-browser\"
              data-base-url=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video"));
            echo "\" 
              data-default-url=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
              data-empty=\"暂无视频文件，请先上传。\">
              \t<div class=\"file-browser-list-container\"></div>
              </div>
          </div>
        ";
        }
        // line 130
        echo "
        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
            <div id=\"file-browser-video\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "video")), "html", null, true);
        echo "\" 
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"支持优酷、土豆、腾讯、网易公开课的视频页面地址导入\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-params-url=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
      data-targetType=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
      data-targetId=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        ";
        // line 165
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 166
            echo "        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 170
        echo "
        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的音频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"audio-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 187
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#audio-chooser-progress\"
                data-storage-type=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "audio"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"audio-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>
                ";
        // line 208
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 209
            echo "                  500M
                ";
        } else {
            // line 211
            echo "                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                ";
        }
        // line 213
        echo "                </strong>。</li>
                ";
        // line 214
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 215
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 218
            echo "                  <li>
                    音频将上传到<strong>网站服务器</strong>，";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("如需使用EduSoho云视频,"), "html", null, true);
            echo "点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。
                  </li>
                ";
        }
        // line 222
        echo "              </ul>
            </div>
          </div>

        </div>
\t";
        // line 227
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 228
            echo "          <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
            <div id=\"file-browser-audio\" data-role=\"file-browser\"
            \t\tdata-base-url=\"";
            // line 230
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio"));
            echo "\" 
              data-default-url=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 232
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
              data-empty=\"暂无音频文件，请先上传。\">
            \t\t<div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 238
        echo "
        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
          data-url=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "audio")), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        ";
        // line 265
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 266
            echo "        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 270
        echo "
         <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的PPT文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"ppt-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 287
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#ppt-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"ppt-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
\t";
        // line 312
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 313
            echo "          <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
            <div id=\"file-browser-ppt\" data-role=\"file-browser\"
            \t\tdata-base-url=\"";
            // line 315
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt"));
            echo "\" 
              data-default-url=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 317
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
            \t\tdata-empty=\"暂无PPT文件，请先上传。\">
            \t<div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 323
        echo "
        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
            <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "ppt")), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>



 <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "document")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\" data-toggle=\"tab\">上传文档</a></li>
        ";
        // line 349
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 350
            echo "        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 354
        echo "
         <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的文档：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"document-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 371
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#document-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"document-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>pdf,doc,docx</strong>格式的文档上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>文档将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
  ";
        // line 396
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 397
            echo "          <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
            <div id=\"file-browser-document\" data-role=\"file-browser\"
                data-base-url=\"";
            // line 399
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document"));
            echo "\" 
              data-default-url=\"";
            // line 400
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 401
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
                data-empty=\"暂无文档，请先上传。\">
              <div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 407
        echo "
        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
            <div id=\"file-browser-document\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "document")), "html", null, true);
        echo "\" data-empty=\"暂无文档，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>



   <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 423
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\" data-toggle=\"tab\">上传Flash</a></li>
        ";
        // line 433
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 434
            echo "        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 438
        echo "
         <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的Flash：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"flash-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 455
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#flash-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"flash-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>swf</strong>格式的文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>Flash将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
  ";
        // line 480
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 481
            echo "          <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
            <div id=\"file-browser-flash\" data-role=\"file-browser\"
                data-base-url=\"";
            // line 483
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash"));
            echo "\" 
              data-default-url=\"";
            // line 484
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 485
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
                data-empty=\"暂无Flash，请先上传。\">
              <div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 491
        echo "
        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
            <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "flash")), "html", null, true);
        echo "\" data-empty=\"暂无Flash，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>


</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 494,  795 => 491,  786 => 485,  782 => 484,  778 => 483,  774 => 481,  772 => 480,  745 => 456,  739 => 455,  735 => 454,  717 => 438,  711 => 434,  709 => 433,  696 => 423,  692 => 422,  688 => 421,  674 => 410,  669 => 407,  660 => 401,  656 => 400,  652 => 399,  648 => 397,  646 => 396,  619 => 372,  613 => 371,  609 => 370,  591 => 354,  585 => 350,  583 => 349,  570 => 339,  566 => 338,  562 => 337,  548 => 326,  543 => 323,  534 => 317,  530 => 316,  526 => 315,  522 => 313,  520 => 312,  493 => 288,  487 => 287,  483 => 286,  465 => 270,  459 => 266,  457 => 265,  444 => 255,  440 => 254,  436 => 253,  421 => 241,  416 => 238,  407 => 232,  403 => 231,  399 => 230,  395 => 228,  393 => 227,  386 => 222,  380 => 219,  377 => 218,  372 => 215,  370 => 214,  367 => 213,  361 => 211,  357 => 209,  355 => 208,  334 => 190,  330 => 189,  323 => 187,  319 => 186,  301 => 170,  295 => 166,  293 => 165,  280 => 155,  276 => 154,  272 => 153,  258 => 142,  246 => 133,  241 => 130,  232 => 124,  228 => 123,  224 => 122,  220 => 120,  218 => 119,  210 => 113,  202 => 110,  196 => 108,  190 => 104,  188 => 103,  168 => 86,  164 => 85,  157 => 83,  153 => 82,  145 => 81,  139 => 77,  128 => 68,  122 => 66,  116 => 64,  114 => 63,  108 => 59,  102 => 57,  96 => 55,  94 => 54,  81 => 43,  79 => 42,  60 => 25,  52 => 19,  50 => 18,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
