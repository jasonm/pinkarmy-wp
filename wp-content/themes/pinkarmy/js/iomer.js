/*
	---------------------
	** REQUIRES jQuery **
	---------------------
	
	includes scripts to:
		+ equalize the heights of elements matching the given selector rules

*/


var iomer = {
	eqTargetClass:	'.resizeTarget',
	equalizePanels : function () {
		//	This little bit of script just make the 'recent announcements' and 'contact us' panels
		//	the same height since we can't quite do it with css for undefined heights.
		var maxHeight = 0;
		$(this.eqTargetClass).each (function () {
			var panelHeight = $(this).height();
			maxHeight = panelHeight > maxHeight ? panelHeight : maxHeight;
		});	
		$(this.eqTargetClass).height (maxHeight);
		// End same sizing
	}
};