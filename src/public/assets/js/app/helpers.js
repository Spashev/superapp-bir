/*
|--------------------------------------------------------------------------
| Exon JS Helper Functions
|--------------------------------------------------------------------------
|
| Here are the helper functions and prototypes that can be used across the 
| application.
|
*/

window.formatMoney = function( number )
{
	return parseInt( number ).formatMoney() ;
}


Number.prototype.formatMoney = function( t )
{
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 0 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

Number.prototype.num = function()
{
    return this.formatMoney(',') ;
};

String.prototype.unNum = function( t )
{

    var unNummed;

    if( typeof t != 'undefined' )
    {
        unNummed = parseFloat( this.replace( t , '' ) ) ;
    }
    unNummed = parseFloat( this.replace( /,/g , '' ) ) ;

    if( isNaN( unNummed ) )
    {
        unNummed = 0 ;
    }
    return unNummed ;
};

window.getConfig = function( configuration, defaultObject )
{
	const finalConfiguration = {} ;

	if( typeof configuration == "undefined" )
	{
		configuration = {} ;
	}

	for( const key in defaultObject )
	{
		finalConfiguration[ key ] = defaultObject[ key ] ;

		if( typeof configuration[ key ] !== "undefined" )
		{
			finalConfiguration[ key ] = configuration[ key ] ;
		}
	}

	return finalConfiguration ;
}

/* ---END--- helpers.js */