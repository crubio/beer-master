$( document ).ready( function (){
    // Tabbed box widget - can turn this into a plugin with options later.
    // Listener for tab click
    $('.tabs-menu').on('click', 'a', function (e){
        e.preventDefault();

        var $this = $(this),
            container = $this.closest('.tabs');
            tabId = $this.data('tabId'),
            tabs = container.find('.tabs-menu li'),
            tabsPanels = container.find('.tabs-content div');

        // Clear and set active class
        tabs.removeClass('active');
        // Add back to parent
        $this.parent('li').addClass('active');

        // Hide all content panels and add the correct one back
        tabsPanels.hide();
        container.find('[data-content-id='+tabId+']').show();
    });
});