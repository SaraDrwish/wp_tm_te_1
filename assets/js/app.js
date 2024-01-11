


console.log("Start the app js");



$(document).ready(function(){
    if($(this).scrollTop() > 1 ){
        $('.page-title').addClass('sticky');
    }else{
        $('.page-title').removeClass('sticky');

    }
})