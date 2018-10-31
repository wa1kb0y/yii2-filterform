$(function() {

    $(".filter-form .form-control").change(function () {
        var form = $(this).closest('form').serializeArray();
        params = $.param(form);
	    url = new URL(window.location);
	    url.search = params;
	    window.location = url.toString();
    });
    
});