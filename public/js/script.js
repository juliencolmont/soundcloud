$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container')
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false})
$(document).ready(function(){
    $('#chansons').on('click', 'a', function(e){
        e.preventDefault();
        let audio = $("#audio");
        let f = $(this).attr('data-file');
        console.log(f);
        audio[0].src=f;
        audio[0].load();
        audio[0].play();
    });

    $('#search').submit(function(e){
        e.preventDefault();
        window.location.href ="/recherche/"+e.target.elements[0].value;

    });

    $("#testajax").click(function(e){
        e.preventDefault();
        $.ajax({
            type:"GET",
            url:"/testajax",
            success: function(data, textStatus, jqXHR){
                $("#aremplir").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown){

            }
            
        });
    });

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
    //toastr["success"]("Inconceivable!")

});
