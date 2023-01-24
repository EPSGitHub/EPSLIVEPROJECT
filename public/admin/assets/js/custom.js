(function($){
$(document).ready(function(){


$('a#logout').click(function(e){

	e.preventDefault();

	$('form#logout_form').submit();




});

 //CK-editor

 CKEDITOR.replace( 'ckeditor',{
    height  : '400px',
 });
 CKEDITOR.replace( 'ckeditorbn',{
    height  : '400px',
 });

  //image-preview

  $(document).on('change','input#fimg',function(e){
    e.preventDefault();
    let post_img_url =URL.createObjectURL(e.target.files[0]);
    $('img#feather_img').attr('src',post_img_url);
    $('#first').hide();
    $('#second').show();
});


  // bangla image-preview

  $(document).on('change','input#bnfimg',function(e){
    e.preventDefault();
    let post_img_url =URL.createObjectURL(e.target.files[0]);
    $('img#bnfeather_img').attr('src',post_img_url);
    $('#bnfirst').hide();
    $('#second').show();
});




  //image-preview






 /**
         *  post Category Update Model Show
         */

  $('.update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('postcat_edit_id');
   $.ajax({
    url:'postCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="cat_name_en"]').val(data.name_en);
        $('#edit_cat_modal form input[name="cat_name_bn"]').val(data.name_bn);
        $('#edit_cat_modal form input[name="cat_id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});



 /**
         *  Press Category Update Model Show
         */

 $('.update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'pressCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="cat_name_en"]').val(data.name_en);
        $('#edit_cat_modal form input[name="cat_name_bn"]').val(data.name_bn);
        $('#edit_cat_modal form input[name="cat_id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});



 /**
         *  Faq Category Update Model Show
         */

$('.update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'faqCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="cat_name_en"]').val(data.name_en);
        $('#edit_cat_modal form input[name="cat_name_bn"]').val(data.name_bn);
        $('#edit_cat_modal form input[name="cat_id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});


 /**
  *
  *
         * Career Category Update Model Show
         */


$('.update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'careerCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="cat_name"]').val(data.name);
        $('#edit_cat_modal form input[name="cat_id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});



// Job Published status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $status_id = $(this).attr('status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'careers/statusInactive/'+$status_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'careers/statusActive/'+$status_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});





// Job Department status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('stat_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'careercat/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'careercat/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});


// Event  status Update

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('event_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'eventpost/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'eventpost/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});


// Blog  post status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('blog_status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'post/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'post/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});






// Blog  post  Top view manage status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('blogview_status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'postperformance/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'postperformance/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});



// webpopup view manage status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('popup_status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'webpopup/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'webpopup/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});



// Press Release  post status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('press_status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'pressManage/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'pressManage/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});


// FAQ  post status

$(document).on('click','input.check',function(){

    let $checked = $(this).attr('checked');
    let $stat_id = $(this).attr('faq_status_id');
    if($checked =="checked")
    {
       $.ajax({
           url:'faqs/statusInactive/'+$stat_id,
           success:function(data){
            //    swal('status Inactive Successfully');
               location.reload(true);


           },

       })
    }
    else{
        $.ajax({
            url:'faqs/statusActive/'+$stat_id,
            success:function(data){
                // swal('status active Successfully');
                location.reload(true);


            },
        })
    }


});

//User Department Update

$('.update_user_dept').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'department/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="dept_name"]').val(data.name);
        $('#edit_cat_modal form input[name="id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});


//User Designation Update

$('.update_user_des').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'designation/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="des_name"]').val(data.name);
        $('#edit_cat_modal form input[name="id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});


/**
 * Job Prefix code Update
 */


$('.job_prefix_update').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'jobprefix/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="prefix_id"]').val(data.name);
        $('#edit_cat_modal form select[name="department"]').val(data.department);
        $('#edit_cat_modal form input[name="id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});




/**
         *  Event Category Update Model Show
         */

$('.event_update_cat').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'eventCategory/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_eventcat_modal form input[name="entitle"]').val(data.entitle);
        $('#edit_eventcat_modal form input[name="bntitle"]').val(data.bntitle);
        $('#edit_eventcat_modal form input[name="evt_id"]').val(data.id);
        $('#edit_eventcat_modal').modal('show');

    }


      });

});







/**
 * Job Designation code Update
 */


$('.update_job_designation').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'jobdesignation/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_cat_modal form input[name="designation"]').val(data.name);
        $('#edit_cat_modal form input[name="id"]').val(data.id);
        $('#edit_cat_modal').modal('show');

    }


      });

});








 /**
         *  Tag Update Model Show
         */

  $('.update_tag').click(function(e){
    e.preventDefault();

   $id = $(this).attr('edit_id');
   $.ajax({
    url:'postTag/'+ $id+'/edit' ,
    success:function(data){

        $('#edit_tag_modal form input[name="tag_name_en"]').val(data.name_en);
        $('#edit_tag_modal form input[name="tag_name_bn"]').val(data.name_bn);
        $('#edit_tag_modal form input[name="tag_id"]').val(data.id);
        $('#edit_tag_modal').modal('show');

    }


      });

});

        // Data table set Up
        $(document).ready( function () {
            $('#post_table').DataTable();
        } );


        //  Category delete fix
        $('.del_button').click(function(){
            let conf= confirm('Ary you sure');
            if(conf==true)
            {
                return true;
            }
            else{
                return false;
            }

         });



           //  event  post submit fix
        $('.event_submit').click(function(){
            let conf= confirm('Are you ready to submit your post ');
            if(conf==true)
            {
                return true;
            }
            else{
                return false;
            }

         });


         // Menu Fix

         $('#sidebar-menu ul li ul li.ok').parent('ul').slideDown();
         $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').addClass('subdrop');
         $('#sidebar-menu ul li ul li.ok a').css('color','red');
         $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li'). children('a') .css('background-color','#006B4F');
         $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li'). children('a') .css('color','white');


});
})(jQuery)


// document.addEventListener('contextmenu', event => event.preventDefault());
