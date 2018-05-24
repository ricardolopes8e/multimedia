<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bulma Blog Dark 1</title>
  <!-- stylesheets -->
  <link href="{{ asset('bulma2.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bulmacustom.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link href="'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.cs" rel="stylesheet">


  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!-- navigation -->
<div class="navigation">
  <nav class="nav has-shadow">
    <div class="container">
      <!-- nav site title -->
      <div class="nav-left">
        <a class="nav-item">
          <h3 class="title is-3" style="color: white;">E-STUFF</h3>
        </a>
      </div>
      <!-- end of site title -->

      <!-- this "nav-toggle" hamburger menu is only visible on mobile -->
      <span class="nav-toggle">
	    <span></span>
	    <span></span>
	    <span></span>
	  </span>
      <!-- end of toggle -->

      <!-- this "nav-menu" is hidden on mobile -->
      <div class="nav-right nav-menu">
        <a class="nav-item is-tab is-active" href="index.html">
          Home
        </a>
        <a class="nav-item is-tab" href="post.html">
          Teams
        </a>
        <a class="nav-item is-tab" href="about.html">
          Players
        </a>
        <a class="nav-item is-tab" href="contact.html">
          Competitions
        </a>
        <a class="nav-item">
	      <span class="icon">
		<i class="fa fa-search"></i>
	      </span>
        </a>
      </div>
      <!-- end of nav -->
    </div>
  </nav>
</div>
<!-- end navigation -->
<!-- page content -->
<div class="main-content">
  <div class="container">
    <!-- start of posts -->
    <div class="columns is-multiline is-centered">
      <!-- start of post -->
      <div class="column is-9" style="background-color: #161C1C">
        <!-- post content -->
        <div class="card-content">
          <div class="content">
            <div class="card-inner-wrapper">


              <!-- post text -->
              <div class="card-content-text">
                <div class="columns is-multiple is-narrow is-two-thirds">


                  <div class="column is-7">


                    <i class="fa fa-user-circle" style="font-size:24px; color: #f39c12"> <label
                              class="" style="display:inline; color: #f5fffd;"> Antonio
                        Lopes </label> </i>


                    <ul style=" list-style-type: none;">


                      <li>
                        <label class="is-bold"
                               style="width: 105px; font-size:16px;  color: #f39c12; ">
                          Organização : </label>
                        <label class=""
                               style="display:inline; font-size:16px;  color: #f5fffd;"> FOR THE
                          WIN </label>
                      </li>

                      <li>
                        <label class="is-bold"
                               style="width: 105px; font-size:16px;  color: #f39c12; "> Equipa
                          : </label>
                        <label class="" style="display:inline; font-size:16px; color: #f5fffd;">
                          FTW Hs Pro</label>
                      </li>

                      <li>
                        <label class="is-bold"
                               style="width: 105px; font-size:16px;  color: #f39c12; ">
                          Modalidades </label>

                        <ul style=" list-style-type: none;">


                          <li><label class="is-bold"
                                     style="width: 105px; font-size:12px;  color: #f5fffd; font-weight: bold; ">
                              Hearthstone</label></li>
                          <li><label class="is-bold"
                                     style="width: 105px; font-size:12px;  color: #f5fffd; font-weight: bold; ">
                              Counter Strike </label></li>
                          <li><label class="is-bold"
                                     style="width: 105px; font-size:12px;  color: #f5fffd; font-weight: bold; ">
                              Fortnite </label></li>
                          <li><label class="is-bold"
                                     style="width: 105px; font-size:12px;  color: #f5fffd; font-weight: bold; ">
                              Sea of Thieves </label></li>

                        </ul>


                      </li>


                    </ul>


                  </div>
                  <div class="column is-5">
                    <figure>
                      <figcaption class="ratings">
                        <p>Ratings
                          <a href="#">
                            <span class="fa fa-star" style="color: #f39c12"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-star" style="color: #f39c12"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-star" style="color: #f39c12"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-star" style="color: #f39c12"></span>
                          </a>
                          <a href="#">
                            <span class="fa fa-star-o" style="color: #f39c12"></span>
                          </a>
                        </p>
                      </figcaption>
                    </figure>

                    <div class="card-image">
                      <figure class="image is-large">
                        <img src="{{ asset('img/player.jpeg') }}" alt="img">
                      </figure>
                    </div>

                  </div>


                </div>



              </div>
            </div>
            <!-- end of post text -->


            <!-- post footer -->
            <div class="card-content-footer-small">

              <!-- post footer nav -->
              <div class="columns">
                <div class="column has-text-left">
                  <a class="button is-small is-button-grey" href="index.html">Back to Home</a>
                </div>
                <div class="column has-text-right">
                  <i class="fa fa-calendar">
                    <small>11:09 PM - 1 Jan 2016</small>
                  </i>
                </div>
              </div>
              <!-- end of post footer nav -->
            </div>
            <!-- end of post footer -->

          </div>


        </div>
      </div>


    </div>
  </div>

</div>
</div>
<!-- end of page content -->

<!-- footer: will stick to the bottom -->
<div class="footer footer-top-shadow">
  <div class="container has-text-centered">
	<span class="icon">
	  <i class="fa fa-gamepad"></i>
	</span>

  </div>
</div>
<!-- end of footer -->
</body>
</html>