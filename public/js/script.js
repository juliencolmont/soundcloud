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
});