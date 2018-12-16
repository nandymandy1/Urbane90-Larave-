// Hide Section
$('.section').hide();
setTimeout(() => {
    $(document).ready(() => {

        // Show Sections
        $('.section').fadeIn();

        // Hide Preloader
        $('.loader').fadeOut();

        // Init Side-Nav
        $('.button-collapse').sideNav();

        // JQuery Animation

        // Modal Init
        $('.modal').modal();

        // Init Select
        $('select').material_select();
        
        // initialize CK Editor for the body 
        CKEDITOR.replace('body');

    });
}, 1000)
// Hide Section