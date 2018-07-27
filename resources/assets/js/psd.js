//vergroot image on hover
$( document ).ready(function() {

    var screensize= $( window ).width();
    var screenInBetween = ( screensize > 980 && screensize < 1420);
    
    if( screenInBetween){
    $('#psd').css('width','8rem');
    }


    $('#psd').hover(
        function(){
            var options={
                'width':'22rem',
            }
            $(this).css(options);
        },function(){
            if(screenInBetween){
                var options={
                    'width':'8rem',
                }
            }else{
                var options={
                    'width':'12rem',
                }
            }
             $(this).css(options);
        }
    );


});


