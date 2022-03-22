// jQuery(document).ready(function(jQuery){
  
//     var is_sending = false;
//     jQuery('#contact-form').submit(function(e){
//         if(is_sending){
//             return false;
//         }
//         e.preventDefault();
//         var jQuerythis =jQuery(this);

//         jQuery.ajax({
//             url : '&amp;lt;?php echo admin_url("admin-ajax.php") ?&amp;gt;', // Let WordPress figure this url out..
//             type:'post',
//             dataType:'JSON',
//             data: jQuerythis.serialize(),
//             beforSend: function(){
//                 is_sending = true;
//             }
//         })
//         console.log(jQuery.ajax.url)
//     });
// }



// );