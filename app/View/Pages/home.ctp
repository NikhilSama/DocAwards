<div id="signup_modal"  class="reveal-modal">
        <h3>Signup for DocAwards</h3>
        <form method="post" action="http://docawards.com/api/users/backbone_add" id="signup_form">
          <div class="field">
            <label>Username</label>
            <input name="data[User][username]" maxlength="45" type="text" placeholder="nikhil_sama">
          </div>

          <div class="field">
            <label>Password</label>
            <input name="data[User][password]" maxlength="45" type="password" placeholder="Secret Password">
          </div>

          <div class="field">
            <label>Role</label>
            <input name="data[User][role]" maxlength="45" type="text" placeholder="doctor" value="Doctor">
          </div>
          
          <input type="hidden" value="http://localhost:9000/docawards" name="success_redirect">

          <div class="field">
            <input type="submit" id="signup_btn" class="button primary right" value="Signup!">
          </div>
        </form>
        
        <a class="close-reveal-modal">&#215;</a>
      </div>

      <div id="login_modal" class="reveal-modal">
        <h3>Log in</h3>
        <form method="post" action="http://docawards.com/api/users/backbone_login" id="login_form">
          <div class="field">
            <label>Username</label>
            <input name="data[User][username]" maxlength="45" type="text" placeholder="nikhil_sama">
          </div>

          <div class="field">
            <label>Password</label>
            <input name="data[User][password]" maxlength="45" type="password" placeholder="Secret Password">
          </div>

          <input type="hidden" value="http://localhost:9000/docawards/" name="success_redirect">

          <div class="field">
            <input type="submit" id="login_btn" class="button primary right" value="Login!">
          </div>


        </form>

        <!-- <iframe src="http:/docawards.com/api/users/login" id="login_frame"></iframe> -->


        <a class="close-reveal-modal">&#215;</a>
      </div>

    <header id="top" class="row fade">
      <a id="logo" href="#"><h1 class="three columns"><i class="foundicon-plus"></i>DocAwards</h1></a>
      <div class="right">
        <a href="#" class="btn signup button tiny primary">Signup</a>
        <a href="#" class="btn login button tiny secondary">Login</a>
      </div>
    </header>

    <section class="main fade">
      <div id="landing-page-slider">
        <img src="<?= IMAGES_ROOT; ?>landing_slide1.png" style="min-height: 400px" />
        <img src="<?= IMAGES_ROOT; ?>landing_slide2.png" style="min-height: 400px"/>
      </div>
      </div>
      <div class="ask_container">
        <div class="container_inner">
        <div class="row">
          <div class="seven columns centered">
            <h5 class="subheader slogan">Find an award winning doctor near you ..</h5>
            <form id="chosen_form" class="row collapse">
              <div class="nine mobile-three columns">
 
                <select class="chzn-select" data-placeholder="Type specialty, disease or doctor name..">
                  <<optgroup label="doctor" class="doctor_group">
                  </optgroup>
                  
                </select>
              </div>
              <div class="three mobile-one columns">
                <a href="#" id="search_btn" class="postfix button expand">Find!</a>
              </div>
            </form>
          </div><!--seven_columns-->
        

        </div><!--container_inner-->
      </div>

      </div><!--ask_container-->
    </section>

    <section class="carousel fade">
     <!-- Elastislide Carousel -->
          <div id="carousel" class="es-carousel-wrapper">
            <h1>Our panelists</h1>

            <div class="es-carousel">
              <ul>

                <li><a href="#"><img src="img/large/2.jpg" alt="image02" /></a></li>
                <li><a href="#"><img src="img/large/3.jpg" alt="image03" /></a></li>
                <li><a href="#"><img src="img/large/4.jpg" alt="image04" /></a></li>
                <li><a href="#"><img src="img/large/5.jpg" alt="image05" /></a></li>
                <li><a href="#"><img src="img/large/6.jpg" alt="image06" /></a></li>
                <li><a href="#"><img src="img/large/7.jpg" alt="image07" /></a></li>
                <li><a href="#"><img src="img/large/8.jpg" alt="image08" /></a></li>
                <li><a href="#"><img src="img/large/9.jpg" alt="image09" /></a></li>
                <li><a href="#"><img src="img/large/10.jpg" alt="image10" /></a></li>
                <li><a href="#"><img src="img/large/11.jpg" alt="image11" /></a></li>
                <li><a href="#"><img src="img/large/12.jpg" alt="image12" /></a></li>
                <li><a href="#"><img src="img/large/13.jpg" alt="image13" /></a></li>
                <li><a href="#"><img src="img/large/14.jpg" alt="image14" /></a></li>
                <li><a href="#"><img src="img/large/15.jpg" alt="image15" /></a></li>
                <li><a href="#"><img src="img/large/16.jpg" alt="image16" /></a></li>
                <li><a href="#"><img src="img/large/17.jpg" alt="image17" /></a></li>
                <li><a href="#"><img src="img/large/18.jpg" alt="image18" /></a></li>
                <li><a href="#"><img src="img/large/19.jpg" alt="image19" /></a></li>
                <li><a href="#"><img src="img/large/20.jpg" alt="image20" /></a></li>
                <li><a href="#"><img src="img/large/21.jpg" alt="image21" /></a></li>
                <li><a href="#"><img src="img/large/22.jpg" alt="image22" /></a></li>
                <li><a href="#"><img src="img/large/23.jpg" alt="image23" /></a></li>
                <li><a href="#"><img src="img/large/24.jpg" alt="image24" /></a></li>
                <li><a href="#"><img src="img/large/25.jpg" alt="image25" /></a></li>
              </ul>
            </div>
          </div>
          <!-- End Elastislide Carousel -->

    </section>


<script type="text/javascript">
  $(document).ready(function() {
     // put all your jQuery goodness in here.
    $(".chzn-select").chosen();
    window.autocomplete_select();
    $("#landing-page-slider").orbit({
          animationSpeed: 200,
          timer: true,
          directionalNav: false, 
          captions: false, 
          fluid: true
        });
   });
</script>