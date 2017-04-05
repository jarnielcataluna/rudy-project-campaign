//get all elements with class and get the biggest box
//console.log('asdf');
function get_biggest(elements){
    var biggest_height = 0;
    for ( var i = 0; i < elements.length ; i++ ){
        var element_height = $(elements[i]).height();
        //compare the height, if bigger, assign to variable
        if(element_height > biggest_height ) biggest_height = element_height;
    }
    return biggest_height;
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(window).resize(function() {
    //resize();

});

var view = 12;
var count = 0;
var page = 0;

var formwrapper = $('.form-wrapper');
var popupoptin = $('.popup-opt-in');

$(document).ready(function(){
    getEntriesCount();
    $('.tabs-menu a').click(function(e){
        e.preventDefault();

        var _href = $(this).attr('href');

        $('.tabs-menu li').removeClass('active');
        $(this).closest('li').addClass('active');


        $('.tabs-item').css({'display' : 'none'});
        $(_href).css({'display' : 'block'});

        if(_href == '#gallery') {
            $('html, body').scrollTop();
        }
    });

    $('.load-more-btn').click(function(e){
        e.preventDefault();
        $('.wavy-loader').fadeIn(300);
        $(this).css({'display' : 'none'});
        page = page+1;
        getEntries(page);
    });

    $("#imgInp").change(function(){
        readURL(this);
    });

    var hastag;

    $(".captionfield textarea").on("change", function(){
        hastag = isSwearWord($(this).val());
    });

    $('.contest-form').submit(function(e){
        e.preventDefault();
        $('.input-wrap').not('.address-field, .captionfield, .input-gender').addClass('error');
        $('.captionfield').addClass('error');

        console.log('test');
        isvalidate = false;

        if( IsEmail($('#account-email').val() )) {
            $('#account-email').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#first-name').val() == '') {
            $('#first-name').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if(!$('#imgInp').val() == '') {
            $('#imgInp').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }


        if( $('#contact-num').val() != '' && $('#contact-num').val().length == 11 ){
            $('#contact-num').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if ($('#limitedtextarea').val() != '' && hastag == true) {
            $('#limitedtextarea').closest('.captionfield').removeClass('error');
            isvalidate = true;

        } else {
            isvalidate = false;
        }

        if( !$('#imgInp').val() == '' && !$('#contact-num').val() == '' && !$('#first-name').val() == '' && IsEmail($('#account-email').val()) &&  isvalidate == true) {
            formwrapper.addClass('preload-overlay');
            popupoptin.addClass('active');


        } else {
            e.preventDefault();
        }
    });

    function isSwearWord(fieldValue) {
        var words = ["#TechnicallyCool", "#technicallyCool", "#Technicallycool", "#technicallycool"];
        for (i = 0; i < words.length; i++) {
            var rgx = new RegExp(words[i], 'gi');
            if (rgx.test(fieldValue)) {
                $('.caption-error').css({'display' : 'none'});
                return true;    
            } else {
                $('.caption-error').css({'display' : 'block'});
            } 
        }
        return false;
    }

    $('.form-submit').click(function(e){
        e.preventDefault();

        var formInput = document.getElementById('imgInp');
        var formData = new FormData();
        formData.append('name', $('#first-name').val());
        formData.append('email', $('#account-email').val());
        formData.append('mobile', $('#contact-num').val());
        formData.append('caption', $('#limitedtextarea').val());
        formData.append('address', $('#store').val());
        formData.append('image', formInput.files[0]);

        popupoptin.removeClass('active');
        formwrapper.addClass('preload-overlay');

        $.ajax({
            url : 'https://tools.propelrr.com/listener/rudy-campaign/upload/entry',
            type : 'POST',
            data : formData,
            crossDomain: true,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success : function(data) {
                if (data == 1) {
                    $('.popup-thankyou').addClass('active');
                    formwrapper.removeClass('preload-overlay');
                }
            },

            error: function(XMLHttpRequest, textStatus, errorThrown) { 
               console.log("Status: " + textStatus);
               console.log("Error: " + errorThrown);

               if( textStatus == 'error') {
                    $('.popup-error').addClass('active');
               }
           }
        });
    });

    $('.go-gallery').click(function(){
        $('.popup-wrap').removeClass('active');
        $('#gallery-menu').click();
        $('.tabs-menu li:first-child').remove();
    });



    $('.btn-ghost, .back-error').click(function(e){
        e.preventDefault();
        formwrapper.removeClass('preload-overlay');
        $('.popup-error').removeClass('active');
    });

    //resize();
});

$(window).load(function() {
});

function getEntriesCount(){
    $('.load-more-btn').css({'display' : 'none'});
    $.ajax({
        url: 'https://tools.propelrr.com/listener/rudy-campaign/entries/count',
        type: 'POST',
        crossDomain: true,
        processData: false,
        contentType: false,
        success:function(data){
            if(data > 0){
                count = data;
                getEntries(0);
            } else {
                $('.load-more-btn').css({'display' : 'none'});
            }
        }
    });
}

function getEntries(npage) {
    $('.load-more-btn').css({'display' : 'none'});
    var formData = new FormData();
    formData.append('page', npage);
    formData.append('view', view);
    $.ajax({
        url: 'https://tools.propelrr.com/listener/rudy-campaign/entries/get',
        type: 'POST',
        data:formData,
        crossDomain: true,
        processData: false,
        contentType: false,
        success:function(response){
            var data = JSON.parse(response);
            if(data){
                for (var x = 0; x < data.length; x++) {
                    appendToCont($('.flex-container'),data[x]);
                }
            }
        }
    }).done(function(e){
        $('.wavy-loader').hide(300);
        var dcount = (npage+1)*view;
        if(dcount < count){
            $('.load-more-btn').css({'display' : 'inline-block'});
        }
    });
}

function appendToCont(container,data){
    var append = '<div class="flex-item"><div class="gi-wrap animated" data-animation="fadeInUp"><div class="gi-image"><img src="https://s3-ap-southeast-1.amazonaws.com/rudyproject-image-hosting/'+data['photo_link']+'" alt=""></div>'+
        '<div class="gi-text"><p class="gi-name"> '+data['name']+'</p>'+
        '<p class="gi-captions">'+data['caption']+'</p></div></div></div>';
    container.append(append);
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('img#sw-item').attr('src', e.target.result).css({'display' : 'block'});
            $('.form-wrapper textarea').focus();
        }
        reader.readAsDataURL(input.files[0]);
    }
}