$(document).ready(function(){
    $('td').mouseover( function() {
        var tekst = $(this).parent().text();
        
        $('td').attr('title', tekst)
          .tooltip('show');
    });
});