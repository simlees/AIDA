$(document).ready(function(){
    if (typeof(Storage) !== "undefined") {
        // Code for localStorage/sessionStorage.
        $('#layout-choice').text(localStorage.layout);
        
        $('#browse-filter-box button').click(function(){
            localStorage.setItem("layout", $(this).attr("layout"));
            $('#layout-choice').text(localStorage.layout);
        });

    } else {
        // Sorry! No Web Storage support..
    }

});
