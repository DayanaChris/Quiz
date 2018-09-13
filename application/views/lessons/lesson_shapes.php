<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY.com</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/app.css">
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/animate.css">


    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


      <style>

     .btn{
                  width: 15%;
                  margin-top: 0px;
                  padding:10px;
                  border: 0;
                  background: transparent;
              }
               body {
                   font-family: "Lato", sans-serif;
                   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/background.jpg");
                   background-repeat: repeat;
                   font-weight: 100;
                   height: 100vh;
                   margin: 0;
               }
                  .letter{ width:13%; padding-right: 0%;  }
                  .lettersmall{ width:12%;   padding-right: 0%; }

                  .color{ width: 13%;  }
                  .number{width: 12%; }
                  .number1margin{margin-left: 25%}
                  .number2margin{margin-left: 45%}

                  .shape0margin{margin-left: 25%}
                  .shape1margin{margin-left: 20%}
                  .shape2margin{margin-left: 10%}



             .back{
              width: 15%;
              padding: 10px;
              margin-top: 0px;
              margin-bottom: 10px;
              border: 0;
              background: transparent;
              }
              .marg0{ margin-top:2%; margin-left:12%; }
              .marg1{ margin-left: 20%; }
              .margine2{ margin-left: 15%; }
              .marg3{  margin-left: 9%; }
              .marg4{ margin-left: 0.5%; }

              /* shape margin */
              .shapemarg2{ margin-left: 21%;}
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
                  .number{width: 27%; }
                  .number1margin{margin-left: 0%}
                  .number2margin{margin-left: 0%}


              }

               @media screen and (min-height: 1200px) {
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
                  .number{width: 27%; }
                  .number1margin{margin-left: 0%}
                  .number2margin{margin-left: 0%}
              }

   </style>

 </head>
 <body class="run-animation">
        <a href="<?php echo base_url(); ?>lessons/submenu_shapes "> <img class="btn zoom  container float-left  card-img-top img-fluid    "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/left.png"   /></a>

        <a href="<?php echo base_url(); ?>lessons/lesson_vowels "> <img class="btn zoom  container float-right card-img-top img-fluid   " style="visibility: hidden;"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_change.png"   /></a>


        <div class="container-fluid " >
                   <a href="<?php echo base_url(); ?>lessons/lesson_alphabetsA"> <img  class="   letter let center zoom card-img-top img-fluid" style="margin-top:2%; margin-left:14%;"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/square.png"   ></a>
                   <a href="">    <img  class="   letter let center zoom card-img-top img-fluid"  style="margin-top:2%; margin-left:12%;" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/triangle.png"   ></a>

                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid "   style="margin-left:15%;" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/hexagon.png"   >
                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid" style=" margin-left:12%;" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/circle.png"   >
                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid" style=" margin-left:12%;" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/oval.png"   >


                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid marg4" style=" margin-left:10%;"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/trapezoid.png"   >
                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid" style=" margin-left:10%;"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/pentagon.png"   >
                   <a href=""><img  class="   letter let center zoom card-img-top img-fluid" style=" margin-left:10%;" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/rectangle.png"   >
                   <a href="">            <img  class="   letter let center zoom card-img-top img-fluid" style=" margin-left:10%;"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Shapes/Shape/rhombus.png"   >

       </div>




       <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
       <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


   </body>
 </html>
