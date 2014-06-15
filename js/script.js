

$(document).ready(function(){

    if(lang == "am") {
        $('.langs').find(">:first-child").addClass('flag');
    }
    else if(lang == "ru") {
        $('.langs').find(">:first-child").next().addClass('flag');
    }
    else {
        $('.langs').find(">:first-child").next().next().addClass('flag');
    }

});



















