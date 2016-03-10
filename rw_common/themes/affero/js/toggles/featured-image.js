$(function() {
	if ($('.affero-content').find('img:first').length > 0 && jQuery(".album-title").length == 0) {
		$(".affero-banner").html($('.affero-content').find('img:first'));
	}
});