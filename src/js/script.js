// HETIC div information
var information_div = document.querySelector('.informationDiv');

function follow_mouse(evenement) {
  information_div.style.left = (evenement.pageX-201)+'px';
  information_div.style.top = (evenement.pageY+37)+'px';
}
document.onmousemove = follow_mouse;


// Toggle display of the div information
var togglerClass = document.querySelector("#catchPhrase");

togglerClass.onmouseenter = function() {
    information_div.classList.add('display');
}
togglerClass.onmouseleave = function() {
    information_div.classList.remove('display');
}

$(document).ready(function(){
    $('a[href^="#skills"]').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 1500, "easeInOutCubic");
        return false;
    });
});

$(document).ready(function(){
    $('a[href^="#projects"]').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 1500, "easeInOutCubic");
        return false;
    });
});

$(document).ready(function(){
    $('a[href^="#contact"]').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 1500, "easeInOutCubic");
        return false;
    });
});