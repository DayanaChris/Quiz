<?php
  class Lessons extends CI_Controller{
    public function submenu_alphabets(){
      $data['title'] = 'ALPHABETS';

      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_alphabets', $data);
    }

    public function submenu_actionwords(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_actionwords');
    }
    public function category_menu(){
      $this->load->view('category_menu');
    }

    public function landing_page(){
      $this->load->view('pages/landing_page');
    }
    public function about(){
      $this->load->view('pages/about');
    }
    public function contact(){
      $this->load->view('pages/contact');
    }





        public function aasample(){
          $this->load->view('lessons/aasample');
        }


    public function submenu_colors(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_colors');
    }

    public function submenu_expressions(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_expressions');
    }

    public function submenu_numbers(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_numbers');
    }


    public function submenu_shapes(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_shapes');
    }




    // lesson routes
        public function lesson_alphabets(){
          $this->load->view('templates/temp_alphabets');
          $this->load->view('lessons/lesson_alphabets');
        }


        public function lesson_vowels(){
          $this->load->view('templates/temp_alphabets');

          $this->load->view('lessons/lesson_vowels');
        }

        public function lesson_actionwords(){
          $this->load->view('templates/temp_alphabets');
          
          $this->load->view('lessons/lesson_actionwords');
        }
                  public function action_words(){
                    $this->load->view('templates/temp_alphabets');
                    $this->load->view('lessons/action_words');
                  }

        public function lesson_colors(){
          $this->load->view('lessons/lesson_colors');
        }
              public function color_black(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_black');
              }
              public function color_blue(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_blue');
              }
              public function color_brown(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_brown');
              }
              public function color_green(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_green');
              }
              public function color_orange(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_orange');
              }
              public function color_pink(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_pink');
              }

        public function lesson_expressions(){
          $this->load->view('templates/temp_alphabets');


          $this->load->view('lessons/lesson_expressions');
        }
              public function expression_happy(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/expression_happy'); }


        public function lesson_numbers(){
          $this->load->view('templates/temp_alphabets');
          $this->load->view('lessons/lesson_numbers');
        }
              public function numbers(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/numbers'); }


        public function lesson_shapes(){
          $this->load->view('lessons/lesson_shapes');
        }





// quiz routes
    public function quiz_alphabets(){
      $this->load->view('lessons/quiz_alphabets');
    }

    public function quiz_actionwords(){
      $this->load->view('lessons/quiz_actionwords');
    }

    public function quiz_colors(){
      $this->load->view('lessons/quiz_colors');
    }

    public function quiz_expressions(){
      $this->load->view('lessons/quiz_expressions');
    }

    public function quiz_numbers(){
      $this->load->view('lessons/quiz_numbers');
    }

    public function quiz_shapes(){
      $this->load->view('lessons/quiz_shapes');
    }


  }
