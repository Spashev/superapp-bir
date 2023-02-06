//
// |--------------------------------------------------------------------------
// | Exon Copy To Clipboard Function
// |--------------------------------------------------------------------------
//

window.copyToClipboard = function( text )
{
	var success = true ,
		range = document.createRange() ,
		selection ;

	// For IE.
	if (window.clipboardData) {
		window.clipboardData.setData("Text", text);
	} else {
		// Create a temporary element off screen.
		var tmpElem = $('<div>');
		tmpElem.css({
			position: "absolute",
			left: "-1000px",
			top: "-1000px",
		});
		// Add the elem value to the temp element.
		tmpElem.text(text);
		$("body").append(tmpElem);
		// Select temp element.
		range.selectNodeContents(tmpElem.get(0));
		selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);
		// Lets copy.
		try {
			success = document.execCommand("copy", false, null);
		}
		catch (e) {
			//copyToClipboardFF(text);
		}
		if (success) {
			tmpElem.remove();
		}
	}
} ;
