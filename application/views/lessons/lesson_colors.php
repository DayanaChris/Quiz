
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY.com</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style>



              .btn{
                  width: 13%;
                  margin-top: 0px;
                  padding:3%;
                  border: 0;
                  background: transparent;


              }
               body {
                   font-family: "Lato", sans-serif;
                   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/background.jpg");
                   background-repeat: repeat;
                   font-weight: 100;
                   height: 100vh;
                   margin: 0;
               }
                  .letter{
                      width:13%;
                      padding-right: 0%;
                  }
                  .lettersmall{
                      width:12%;
                      padding-right: 0%;
                  }

                  .color{
                      width: 13%;
                  }
                  .number{
                      width: 20%;
                  }

             .back{
              width: 15%;
              padding: 10px;
              margin-top: 0px;
              margin-bottom: 10px;
              border: 0;
              background: transparent;
              }
              .marg0{
                  margin-top:2%;
                  margin-left:12%;
              }
              .marg1{
                  margin-left: 20%;
              }
              .margine2{
                  margin-left: 15%;
              }
              .marg3{
                  margin-left: 9%;
              }
              .marg4{
                  margin-left: 0.5%;
              }

              /* hover */
              .zoom:hover {
                  -ms-transform: scale(1.3); /* IE 9 */
                  -webkit-transform: scale(1.3); /* Safari 3-8 */
                  transform: scale(1.3);
              }
               @media screen and (max-width: 576px) {

                  .btn{
                      width: 20%;
                  }
                  .letter,.lettersmall{
                      width: 30%;
                  }
                  .margine2{
                      margin-left:0%;
                  }
                  .marg0,.marg1,.marg3,.marg4{
                      margin-left:0%;
                  }

                  .back{
                  margin-top: 0%;
                  width:50%;
                  }
                  .zoom:hover {
                  -ms-transform: scale(1.1); /* IE 9 */
                  -webkit-transform: scale(1.1); /* Safari 3-8 */
                  transform: scale(1.1);
                  }

                   .color2margin{
                      margin-left:50%;
                  }


              }

               @media screen and (max-width: 767px) {

                  .btn{
                      width: 20%;
                  }
                  .letter,.lettersmall{
                      width: 30%;
                  }
                  .margine2{
                      margin-left:0%;
                  }
                  .marg0,.marg1,.marg3,.marg4{
                      margin-left:0%;
                  }

                  .back{
                  margin-top: 0%;
                  width:50%;
                  }
                  .zoom:hover {
                  -ms-transform: scale(1.1); /* IE 9 */
                  -webkit-transform: scale(1.1); /* Safari 3-8 */
                  transform: scale(1.1);
                  }

                  .color{
                      width: 30%;
                  }

                  .color2margin{
                      margin-left:20%;
                  }

              }
   </style>

 </head>


 <body class="run-animation">



     <a href="<?php echo base_url(); ?>lessons/submenu_colors "> <img class=" btn zoom  container float-left  card-img-top img-fluid    " style=" " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/left.png"   /></a>

     <div class="container-fluid " >
             <a href="<?php echo base_url(); ?>lessons/color_black">     <img  class="   color   center zoom card-img-top img-fluid color1margin" style="margin-top:5%"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/black.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_blue">    <img  class="   color   center zoom card-img-top img-fluid"  style="margin-top:5%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/blue.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_brown">     <img  class="   color   center zoom card-img-top img-fluid" style="margin-top:5%"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/brown.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_green">    <img  class="   color   center zoom card-img-top img-fluid"  style="margin-top:5%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/green.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_orange">     <img  class="   color   center zoom card-img-top img-fluid" style="margin-top:5%"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/orange.png"   ></a>


             <a href="<?php echo base_url(); ?>lessons/color_pink">     <img  class="   color   center zoom card-img-top img-fluid marg1"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/pink.png"   >
             <a href="<?php echo base_url(); ?>lessons/color_red">    <img  class="   color   center zoom card-img-top img-fluid"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/red.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_violet">    <img  class="   color   center zoom card-img-top img-fluid"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/violet.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_white">    <img  class="   color   center zoom card-img-top img-fluid color2margin"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/white.png"   ></a>
             <a href="<?php echo base_url(); ?>lessons/color_yellow">    <img  class="   color   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Color/Colorspaint/yellow.png"   ></a>

</div>





       <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
       <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


   </body>
 </html>
