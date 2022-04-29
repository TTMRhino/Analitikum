$(document).ready(function() {

    console.log("ready!");

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

    $('#exampleModal').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')

        var modal = $(this)
        modal.find('#postID').val(recipient)
    })

    $("#send-message").click(function(e) {
        e.preventDefault();
        console.log("ENTER!!!");
        var name = $("input[name=name]").val();

        var message = $("textarea[name=message]").val();

        var previous_post_id = $("input[name=previous_post_id]").val();

        $.ajax({
            type: 'POST',
            url: "/",
            data: { name: name, message: message, previous_post_id: previous_post_id },
            success: function(data) {
                alert(data.success);
            }

        });
    });


});