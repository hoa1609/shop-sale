(function ($) {
    "use strict";
    var HT = {};
    var document = $(document);

    HT.switchery = () =>{
        $('.js-switch').each(function(){
            // let _this = $(this)
            // var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(this, { color: '#1AB394' });
        });

        $('.js-switch_2').each(function(){
            var switchery_2 = new Switchery(this, { color: '#ED5565' });
        });
        }

    document.ready(function() {
        HT.switchery();
    });
})(jQuery)











// {{-- <script>
//     $(document).ready(function() {	
//         var elem = document.querySelector('.js-switch');
//         var switchery = new Switchery(elem, { color: '#1AB394' });

//         var elem_2 = document.querySelector('.js-switch_2');
//         var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });
//     })
// </script> --}}