// Hide Section
$('.section').hide();
setTimeout(() => {
    $(document).ready(() => {
        // Show Sections
        $('.section').fadeIn();
        // Hide Preloader
        $('.loader').fadeOut();
        // Hide Preloader
        // Init Side-Nav
        $('.button-collapse').sideNav();
        // JQuery Animation
        // Counter
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
        });
        // Counter  
        // Comments Approve or Deny
        $('.approve').click(function (e) {
            Materialize.toast('Comment Approved', 3000)
            e.preventDefault();
        });
        $('.deny').click(function (e) {
            Materialize.toast('Comment Denied', 3000)
            e.preventDefault();
        });
        // Comments Approve or Deny

        // Quick Todos
        $('#todo-form').submit(function (e) {
            todo = $('#todo').val();
            if (todo != '') {
                const output = `
                <li class="collection-item">
                    <div> ${todo}
                    <a href="#!" class="secondary-content delete">
                        <i class="material-icons red-text">close</i>
                    </a></div>
                </li>
            `;

                // Append new todo in Todo List
                $('.todos').append(output);
                Materialize.toast('Todo Added', 3000);
            }
            else {
                Materialize.toast('Todo Cannot be Blank', 3000);
            }
            e.preventDefault();
        });
        // Quick Todos

        // Delete Todo
        $('.todos').on('click', '.delete', function (e) {
            $(this).parent().parent().remove();
            Materialize.toast('Todo Removed', 3000);
            e.preventDefault();
        });
        // Delete Todo

        // Modal Init
        $('.modal').modal();

        // Init Select
        $('select').material_select();
        // initialize CK Editor for the body 
        CKEDITOR.replace('body');
        CKEDITOR.replace('edit-body');
    });
}, 1000)
// Hide Section