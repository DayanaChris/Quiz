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



  </head>


   <style>

               body {
                   /* background-image: url("https://images.pexels.com/photos/35807/rose-red-rose-romantic-rose-bloom.jpg?auto=compress&cs=tinysrgb&h=350"); */
                   font-family: "Lato", sans-serif;
                   background-repeat: no-repeat;
                   /* background-color: ; */
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

              @media screen and (max-width:1250px){
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


              @media screen and (max-width:992px){
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
              @media screen and (max-width: 600px) {
                  .containers ul li{
                      width: 90%;
                  }
                  h2{
                      text-align: center;
                  }
              }


   </style>
  <body>




    <div class="navbar-fixed-top">

             <nav class="navbar navbar-expand-md  navbar-laravel navbar-dark  " style=" background-color: #78569a;
             left: 0;
             top: 0;
             width: 100%;

             " >
              <div class="container" >

                    <a class="navbar-brand" href="<?php echo base_url(); ?>" style="padding: 4px;margin:auto">

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
                      <ul class="navbar-nav ml-auto">
                          <!-- Authentication Links -->
                          <!-- if not logged in this will show the login/register -->
                          <?php if (!$this->ion_auth->logged_in()) : ?>

                          <li class="nav-item" ><a class="nav-link " href="<?php echo base_url(); ?>Auth/login">Login</a></li>
                        <?php endif; ?>
                        <!--if logged in, this menus nav bar will show  -->
                        <?php if ($this->ion_auth->logged_in()) : ?>

                          <ul class="nav-item dropdown">


                            <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>USER</a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <li><a href="<?php echo base_url(); ?>category_menu"  class="dropdown-item">START THE LESSON</a></li>

                              <li><a href="<?php echo base_url(); ?>Auth/logout"  class="dropdown-item">Logout</a></li>


                            </div>
                          </ul>

                        <?php endif; ?>
                      </ul>
                  </div>
              </div>
          </nav>
        </div>


<div class="container-fluid" style="background-color: #00aeef ">
  <div class="row">
          <div class="col-md-6  " style="margin-top:0%;  "> <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/welcome_logo.png" width="100%"    alt="welcome"  > </div>


            <div class="col-md-6  " style="margin-top:0%; ">
              <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Welcome1.png" width="80%"   alt="welcome"  >
              <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/to.png" width="10%"   alt="welcome"  >


              <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/logo.png" width="80%"   alt="welcome"  >
            </div>
  </div>



</div>

<div class="container-fluid" style="background-color: #DDFAFE ;padding-bottom: 5px;" >


  <img    class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/3.png" width="100%"   alt="welcome"  >


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
