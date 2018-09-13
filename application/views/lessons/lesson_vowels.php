
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

             body {
                 font-family: "Lato", sans-serif;
                 background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/background.jpg");

                 background-repeat: repeat;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
                .letter{
                    width:22%;


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
                margin-left:25%;

            }
            .marg1{
                margin-left: 2%;
                margin-bottom: 2%;
            }
            .marg2{
                margin-left: 25%;
                margin-bottom: 2%;
            }
            .marg3{
                margin-left: 28%;
            }
            .marg4{
                margin-left: 3%;
            }

            .marg_vowel0{
                margin-top:2%;
                margin-left:25%;

            }
            .marg_vowel1{
                margin-left: 2%;
                margin-bottom: 2%;
            }
            .marg_vowel2{
                margin-left: 25%;
                margin-bottom: 2%;
            }
            .marg_vowel3{
                margin-left: 28%;
            }
            .marg_vowel4{
                margin-left: 3%;
            }

            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3);
            }
              @media screen and (max-width: 576px) {

                .btn{
                    width: 90%;
                }
                .letter{
                    width: 40%;
                }

                .marg0{
                    margin-left:20%;
                    margin-top: 15%;

                }

                .marg1,.marg3,.marg4,.marg2{
                    margin-left:8%;
                }

                /*  alphabets*/
                .marg_vowel0{
                    margin-left:20%;
                    margin-top: 15%;

                }

                .marg_vowel1,.marg_vowel3,.marg_vowel4,.marg_vowel2{
                    margin-left:8%;
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

            }

             @media screen and (max-width: 767px) {

                .btn{
                    width: 90%;
                }
                .letter{
                    width: 40%;
                }

                .marg0{
                    margin-top: 15%;

                    margin-left:20%;

                }
                .marg1,.marg3,.marg4,.marg2{
                    margin-left:8%;
                }
                .marg_vowel0{
                    margin-top: 15%;

                    margin-left:20%;

                }
                .marg_vowel1,.marg_vowel3,.marg_vowel4,.marg_vowel2{
                    margin-left:8%;
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

            }
 </style>

 </head>


 <body class="run-animation vowel_bg">






   <a href="<?php echo base_url(); ?>lessons/submenu_alphabets "> <img class="btn zoom  container float-left  card-img-top img-fluid    "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/left.png"   /></a>

           <a href="<?php echo base_url(); ?>lessons/lesson_alphabets  "> <img class="btn zoom  container float-right card-img-top img-fluid   "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_change.png"   /></a>

     <div class="container-fluid " >



                <a href=""><img  class="   vowel let center zoom card-img-top img-fluid marg_vowel0"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/Alphabets/a2.png"   ></a>
               <br>
                <a href=""><img  class="   vowel let center zoom card-img-top img-fluid marg_vowel1"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/Alphabets/e2.png"   ></a>
                <a href=""><img  class="   vowel let center zoom card-img-top img-fluid marg_vowel2" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/Alphabets/i2.png"   ></a>
                   <br>

                <a href=""><img  class="   vowel  let center zoom card-img-top img-fluid marg_vowel3"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/Alphabets/o2.png"   >
                <a href=""><img  class="   vowel  let center zoom card-img-top img-fluid marg_vowel4"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/Alphabets/u2.png"   >

                </div>




                      <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
                      <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


                  </body>
                </html>
