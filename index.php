<?php get_header(); ?>
  <div id="content-wrapper">
    <div id="top-content" class="block-top">
      <div id="name-tag-column">
          <h4>Hello World</h4>
          <h5>my name is</h5>
          <div id="name-tag-inner-box">
            <h4>Brittany Rausch</h4>
        </div>
      </div>
      <div id="web-dev-column">
        <h3>I'm a Web Developer</h3>
      </div>


<!--<img id="name-tag-img" src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/Name-tag.png" alt="Name Tag with the text Hello World my name is Brittany Rausch">-->
    </div>

      <div id="about-me" class="block about-me lighten-1 scrollspy">
          <nav class="pushpin-nav" data-target="about-me">
            <div class="nav-wrapper about-me">
              <div class="container">
                <h3 class="indiv-content-header">About</h3>
              </div>
            </div>
          </nav>
          <div class="content-background">
            <div class="block valign-wrapper row container ">
              <div>
                <h4 id="about-me-heading" class="center-align">About me, Brittany Rausch</h4>
                <p id="about-me-p" class="center-align">
                  I recently graduated from Epicodus in Portland, Or where I learned programming. I enjoy both front-end and back-end development, and as a life long learner I am eager to expand my knowledge in all areas. In fact, one of the reasons I decided to learn coding is that it's a perfect blend of logic and creativity. I'm excited to be a programmer, to be challenged, to learn and to start my new career
                </p>
              </div>
            </div>
          </div>
      </div>
      <div id="portfolio" class="block portfolio lighten-1 scrollspy">
          <nav class="pushpin-nav" data-target="portfolio">
            <div class="nav-wrapper portfolio">
              <div class="container">
                <h3 class="indiv-content-header">Portfolio</h3>
              </div>
            </div>
          </nav>
          <div class="content-background">
            <div class="block valign-wrapper row container ">
              <div id="portfolio-content">
                <div class="card sticky-action">
                  <div class="card-image" >
                    <img id="sommer-breeze-web-screenshot" src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_home.png" alt="Screenshot of the Home page of sommerbreeze.com">
                  </div>
                  <div class="card-content">
                    <span class="card-title">Sommer Breeze</span>
                  </div>
                  <div class="card-action">
                    <button class="activator btn modal-trigger waves-effect" >Info</button>
                    <button class="btn modal-trigger waves-effect" data-target="sommerBreezeInfo">Images</button>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title">Sommer Breeze <i class="material-icons right">close</i></span>
                      <p>
                        More about Sommerbreeze.com
                      </p>
                  </div>
                  <div id="sommerBreezeInfo" class="modal">
                    <div class="modal-content">
                    <div class="carousel carousel-slider">
                    <div class="carousel-fixed-item">
                        <div class="left">
                          <a href="#!" class="movePrevCarousel waves-effect waves-light carousel-arrows"><i class="material-icons left">chevron_left</i></a>
                        </div>
                        <div class="right">
                          <a href="#!" class="moveNextCarousel waves-effect waves-light carousel-arrows"><i class="material-icons right">chevron_right</i></a>
                        </div>
                      </div>
                      <a class="carousel-item" href="#one!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_home.png" alt="Screenshot of the Home page of sommerbreeze.com">

                      </a>
                      <a class="carousel-item" href="#two!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_photography.png" alt="Screenshot of the Photography portfolio page of sommerbreeze.com">

                      </a>
                      <a class="carousel-item" href="#three!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_blog.png" alt="Screenshot of the Blog landing page of sommerbreeze.com">

                      </a>
                      <a class="carousel-item" href="#four!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_blog-health.png" alt="Screenshot of the Health Blog page of sommerbreeze.com">
                      </a>
                      <a class="carousel-item" href="#five!">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/sommerbreeze_about.png" alt="Screenshot of the About page of sommerbreeze.com">
                      </a>
                    </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect btn-flat">X</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card sticky-action">
                  <div class="card-image" >
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/routey_Add_Stops_End.png" alt="Screenshot of having multiple stops and the map link on the Routey website.">
                  </div>
                    <div class="card-content ">
                  <span class="card-title">Routey</span>
                  </div>
                  <div class="card-action">
                    <button class="activator btn modal-trigger waves-effect">Info</button>
                    <button class="btn modal-trigger waves-effect" data-target="routeyInfo">Images</button>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title">Routey<i class="material-icons right">close</i></span>
                      <p>
                        More about Routey
                      </p>
                  </div>
                  <div id="routeyInfo" class="modal">
                    <div class="modal-content">
                    <div class="carousel carousel-slider">
                    <div class="carousel-fixed-item">
                        <div class="left">
                          <a href="#!" class="movePrevCarousel waves-effect waves-light carousel-arrows"><i class="material-icons left">chevron_left</i></a>
                        </div>
                        <div class="right">
                          <a href="#!" class="moveNextCarousel waves-effect waves-light carousel-arrows"><i class="material-icons right">chevron_right</i></a>
                        </div>
                      </div>
                      <a class="carousel-item" href="#one!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/Routey_Starting_Point.png" alt="Screenshot of the Home page of the Routey website.">

                      </a>
                      <a class="carousel-item" href="#two!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/Routey_Add_Stop.png" alt="Screenshot of the adding a stop on the Routey website.">

                      </a>
                      <a class="carousel-item" href="#three!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/Routey_Add_Stop_Map.png" alt="Screenshot of the adding a stop via a map on the ROutey website.">

                      </a>
                      <a class="carousel-item" href="#four!">

                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/08/Routey_Add_Stop_Mult.png" alt="Screenshot of having multiple stops and the map link on the Routey website.">
                      </a>
                    </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect btn-flat">X</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div id="skills" class="block skills lighten-1 scrollspy">
          <nav class="pushpin-nav" data-target="skills">
            <div class="nav-wrapper skills">
              <div class="container">
                <h3 class="indiv-content-header">Skills</h3>
              </div>
            </div>
          </nav>
          <div class="content-background">
            <div class="block valign-wrapper row container ">
              <div id="skills-content">
                <div class="card">
                  <h3>
                    HTML</h3>
                    <div class="card-image html-pic">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/HTML-logo.jpg" alt="HTML logo">
                  </div>
                </div>
                <div class="card">
                  <h3>
                    CSS</h3>
                    <div class="card-image css-pic">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/css-logo.jpg" alt="CSS logo">
                  </div>
                </div>

                <div class="card">
                  <h3>
                    Javascript</h3>
                    <div class="card-image js-pic">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/JS-Logo.png" alt="Javascript logo">
                  </div>
                </div>

                <div class="card">
                  <h3>
                    JQuery</h3>
                    <div class="card-image jquery-pic">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/jquery-logo-1.png" alt="Jquery logo">
                  </div>
                </div>
                <div class="card">
                  <h3>
                    C#</h3>
                    <div class="card-image">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/Csharp-logo.png" alt="C# logo">
                  </div>
                </div>
                <div class="card">
                  <h3>
                    .NET</h3>
                    <div class="card-image">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/10/NET-logo.png" alt=".NET logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>


<?php get_sidebar(); ?>
<div>

</div>
<?php get_footer(); ?>
