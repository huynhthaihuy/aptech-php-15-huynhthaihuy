$(document).ready(function(){
    $("button").click(function(){
        if( $("img").attr('src')==="pic_bulboff.gif")
        {
          $("img").attr("src", "pic_bulbon.gif");
        }
        else
        {
          $("img").attr("src", "pic_bulboff.gif");
        }
    
    });
    });