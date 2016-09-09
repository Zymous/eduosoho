define(function(require, exports, module) {
	exports.run = function() {
        $(".analysis-btn").click(function()
        {
          $(this).closest('.testpaper-question-footer').siblings('.testpaper-question-analysis').show();
          $(this).siblings('.unanalysis-btn').show();
          $(this).hide();
        });
        $(".unanalysis-btn").click(function()
        {
          $(this).closest('.testpaper-question-footer').siblings('.testpaper-question-analysis').hide();
          $(this).siblings('.analysis-btn').show();
          $(this).hide();
        })

	}
})