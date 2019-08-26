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
              <div>
                <h4 id="portfolio-heading" class="center-align">Portfolio</h4>
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
              <div>
                <h4 id="skills-heading" class="center-align">Skills</h4>
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
