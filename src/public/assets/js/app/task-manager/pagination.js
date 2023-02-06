//
// |--------------------------------------------------------------------------
// | Exon Pagination Class
// |--------------------------------------------------------------------------
//



class Pagination
{
 

    constructor( option )
    {
        this.option = option ;
        this.limit = option.limit || 10 ;
        this.offset = option.offset || 0 ;
        this.page = option.page || 1 ;
        this.limit = this.per_page = option.per_page || 10 ;
        this.total_items = option.total_items ;
        this.total_pages = Math.ceil( this.total_items / this.per_page ) ;
    }

    /**
     * Whether or not the app has any pages.
     */
    hasPages()
    {
        return this.total_items > this.limit ;
    }

    /**
     * Whether or not there are any pages left after current page.
     */
    onFirstPage()
    {
        return this.page == 1 ;
    }

    /**
     * Returns the current page number.
     */
    currentPage()
    {
        return this.page ;
    }

    /**
     * Whether or not there are any pages left after current page.
     */
    hasMorePages()
    {
        return this.page < this.total_pages ;
    }

    /**
     * Return total number of pages there are.
     */
    totalPages()
    {
        return this.total_pages ;
    }

    countOfShownItems()
    {
        return ( this.page - 1 ) * this.limit ;
    }

    /**
     * Sets the main pagination parameters, current page and page count.
     * 
     * @param page Current page`s number.
     * @param total_pages count of all pages.
     */
    setPage( page, total_items )
    {
        this.page = page ;
        
		setOffset( page )
        
        this.total_items = total_items ;
        this.total_pages = Math.ceil( this.total_items / this.per_page ) ;
    }

    /**
     * Compares a new page number to the last page and returns true if
     * they are different.
     * 
     * @param newPage The new page number for comparison.
     */
    pageHasChanged( newPage )
    {
        return this.page !== newPage ;
    }


    hasPage( page )
    {
        return page <= this.total_pages ;
    }


    setOffset( page )
    {
        if( this.option.get("lazy_load") )
        {
            this.offset = 0 ;
			this.limit = page * this.per_page ;
        }
        else 
        {
            this.offset = ( page - 1 ) * this.per_page ;
			this.limit = this.per_page ;
        }
    }
    
}