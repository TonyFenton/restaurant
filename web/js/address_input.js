$(function() {
	function createDiv(className, content) {
		var div = document.createElement("div");
		div.className = className;
		var divText = document.createTextNode(content);
		div.appendChild(divText);
		
		return div;
	}

	function getSlug() {
		var slugId = $('#page_parent option:selected').val();

		if ($.isNumeric(slugId)) {
			$.getJSON('/ajax/get-slug/' + slugId)
				.done(function(data){
					if (data.slug) {
						var slug = createDiv("parent_slug", data.slug);
						var slash = createDiv("slash", " / ");
						var slash2 = createDiv("slash", " / ");

						$('#address .slash').remove();
						$('#address .parent_slug').remove();
						
						$('#address #domain').after(slash);
						$('#address .slash').after(slug);
						$('#address .parent_slug').after(slash2);
						
						return;
					}
				});
		}
		var slash = createDiv("slash", " / ");
		
		$('#address .slash').remove();
		$('#address .parent_slug').remove();
		
		$('#address #domain').after(slash);
	}

	getSlug();
	$('#page_parent').on('change', getSlug);
});