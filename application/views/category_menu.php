<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


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


  </head>


 <style>

             body {
                 font-family: "Lato", sans-serif;
                 background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/blue.png");
                 background-repeat: no-repeat;
                 background-color: #fff;
                 color: #fff;
                 font-family: 'Raleway', sans-serif;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
             h2 {
          text-shadow: 2px 2px #757474;
                }
            .containers{
                width: 95%;
                overflow:hidden;
                /* background: skyblue; */
                margin: 20px auto;
                margin-bottom: 100px;
                padding: 20px 0px;
                padding-bottom: 60px;
                padding-left: 5px;

            }
            .containers ul{
                /* margin: 0px ; */
                padding: 0px;
            }

            .containers ul li{
                list-style: none;
                float: left;
                width: 27%; /* width sa box sa lesson */
                height: 180px;
                margin: 2px 20px 30px 50px ;
                box-sizing:border-box;
                /* border:2px solid white; */
            }
            .containers ul li hover{
               opacity: 0.9;

            }

            @media  screen and (max-width:1250px){
                .containers{
                    /* margin-bottom: 200px; */

                }
                .containers ul li{
                    list-style: none;
                float: left;
                width: 40%; /* width sa box sa lesson */
                height: 180px;
                margin: 2px 20px 30px 50px ;
                box-sizing:border-box;
                /* border:2px solid white; */

                }
                h2{
                    text-align: center;
                }
            }
             .wrapper {
                 position: relative;
                 overflow: hidden;
                 }

                 .wrapper:after {
                 content: '';
                 display: block;
                 padding-top: 100%;
                 }

                 .wrapper img {
                 width: auto;
                 height: 100%;
                 max-width: none;
                 position: absolute;
                 left: 50%;
                 top: 0;
                 transform: translateX(-50%);
                 }

                 #shad {
                opacity: 90;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            /* transition: opacity 0.3s ease-in-out; */
            }

            /* Scale up the box */
            .box:hover {
            transform: scale(1.2, 1.2);
            display:block;
            }

            /* Fade in the pseudo-element with the bigger shadow */
            .box:hover:after {
            opacity: 1;
            }


            @media  screen and (max-width:992px){
                .containers ul li{

                    text-align: center;
                    width: 50%;
                    /* margin: 20px;  */
                /* margin: 0px 20px 0px 20px ; */
                margin: 2px 0px 30px 0px ;
}
                  /* Scale up the box */
                  .box:hover {
                transform: scale(1.03, 1.03);
                display:block;
                }

                /* Fade in the pseudo-element with the bigger shadow */
                .box:hover:after {
                opacity: 1;
                }
                h2{
                    text-align: center;
                }



            }
            @media  screen and (max-width: 600px) {
                .containers ul li{
                    width: 90%;
                }
                h2{
                    text-align: center;
                }
            }


 </style>

 </head>


    <body class=" main_menu_bg"  >


      <div class="navbar-fixed-top">

               <nav class="navbar navbar-expand-md  navbar-laravel navbar-dark  " style=" background-color: #78569a;
               left: 0;
               top: 0;
               width: 100%;

               " >
                <div class="container" >

                      <a class="navbar-brand" href="<?php echo base_url(); ?>landing_page" style="padding: 4px;margin:auto">

                          <img src="<?php echo site_url(); ?>assets/images/SPEDEMY/logo.png" style="height: 35px; padding: 0 auto;">SPEDEMY.com
                      </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>



                        <!-- Right Side Of Navbar -->

                    </div>
                </div>
            </nav>
          </div>

                <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; " id="shad" >
                    <div class="card run-animation" style="background: skyblue; ">
                       <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                                <div class="containers ">
                                    <ul>
                                        <li > <a href="<?php echo base_url(); ?>lessons/submenu_alphabets"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a2.png" alt="Card image cap"></a></li>
                                        <li > <a  href="<?php echo base_url(); ?>lessons/submenu_numbers"> <img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a5.png" alt="Card image cap"></a></li>
                                        <li> <a href="<?php echo base_url(); ?>lessons/submenu_colors"> <img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a3.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_shapes"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a6.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_expressions"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a4.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_actionwords"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a1.png" alt="Card image cap"></a></li>
                                    </ul>
                                </div>
                        </div>
                </div>






                    <div class="footer">
                              <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #78569a;
                              position: fixed;
                              left: 0;
                              bottom: 0;
                              width: 100%;
                              margin-bottom: 0;
                              text-align: center;
                              margin-top: 100%;
                              " >

                              <div class="container">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentfooter" aria-controls="navbarSupportedContentfooter" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContentfooter">
                                        <!-- Left Side Of Navbar -->
                                        <ul class="navbar-nav mr-auto">
                                        </ul>

                                        <ul class="navbar-nav mr-auto">
                                          <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a> </li>
                                          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>about">About</a> </li>
                                          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact</a> </li>

                                        </ul>
                                    </div>
                            </nav>
                          </div>

                  </div>
                    <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                            <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                            <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
                    </body>
                </html>
