/*
|--------------------------------------------------------------------------
| Exon Custom Donut Progress
|--------------------------------------------------------------------------
*/

// Table With Sorting Buttons

// Sorted Event : "changed.sort"
// Event Listener Arguments : event, columnName, sortOrder

(function()
{
		
	$(".table-sort th.has-sorter").on("click", function(e)
	{
		const hello = () => {
			return "hey you" ;
		} ;
		$(this).parent().find(".sort-asc, .sort-desc").not( this ).removeClass("sort-desc sort-asc") ;

		let order ;
		
		if( $(this).hasClass("sort-asc") )
		{
			$(this).removeClass("sort-asc").addClass("sort-desc") ;
			order = "desc" ;
		}
		else
		{
			$(this).removeClass("sort-desc").addClass("sort-asc") ;
			order = "asc" ;
		}

		$(this).closest("table").trigger("changed.sort", [ $(this).data("column"), order ] ) ;
	}) ;
		
	$(".table-sort").on("changed.sort", function(e, columnName, sortOrder )
	{
		$(this).addClass("sorted").data("sort-by", columnName ).data("sort-order", sortOrder ) ;
	}) ;

})() ;