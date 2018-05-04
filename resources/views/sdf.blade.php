<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bulma Blog Dark 1</title>
    <!-- stylesheets -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulmacustom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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
        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
             <div class="well profile">
                  <div class="col-sm-12">
                      <div class="col-xs-12 col-sm-8">
                          <h2>Ja Kim</h2>
                          <p><strong>Organization: </strong> Grow UP </p>
                          <p><strong>Team: </strong> UP Pro HS </p>
                          <p><strong>Games: </strong>
                              <span class="tags">Hearthstone</span>
                              <span class="tags">Counter Strike</span>
                              <span class="tags">Fortnite</span>
                              <span class="tags">Sea of Thieves</span>
                          </p>
                      </div>
                      <div class="col-xs-12 col-sm-4 text-center">
                          <figure>
                              <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                              <figcaption class="ratings">
                                  <p>Ratings
                                  <a href="#">
                                      <span class="fa fa-star"></span>
                                  </a>
                                  <a href="#">
                                      <span class="fa fa-star"></span>
                                  </a>
                                  <a href="#">
                                      <span class="fa fa-star"></span>
                                  </a>
                                  <a href="#">
                                      <span class="fa fa-star"></span>
                                  </a>
                                  <a href="#">
                                       <span class="fa fa-star-o"></span>
                                  </a>
                                  </p>
                              </figcaption>
                          </figure>
                      </div>
                      <div id="imagediv" class="col-xs-12 col-sm-3">
                          <img src="https://www.w3schools.com/images/lamp.jpg" alt="Lamp">
                      </div>

                  </div>
                  <div class="col-xs-12 divider text-center">
                      <div class="col-xs-12 col-sm-4 emphasis">
                          <h2><strong> 20,7K </strong></h2>
                          <p><small>Followers</small></p>
                          <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                      </div>
                      <div class="col-xs-12 col-sm-4 emphasis">
                          <h2><strong>245</strong></h2>
                          <p><small>Following</small></p>
                          <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                      </div>
                      <div class="col-xs-12 col-sm-4 emphasis">
                          <h2><strong>43</strong></h2>
                          <p><small>Snippets</small></p>
                          <div class="btn-group dropup btn-block">
                            <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu text-left" role="menu">
                              <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                              <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                              <li class="divider"></li>
                              <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                              <li class="divider"></li>
                              <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                            </ul>
                          </div>
                      </div>
                  </div>
             </div>
          </div>
        </div>
        <!-- end of post column -->
    </div>
</div>
<!-- end of page content -->

<!-- footer: will stick to the bottom -->
<div class="footer footer-top-shadow">
    <div class="container has-text-centered">
	<span class="icon">
	  <i class="fa fa-github"></i>
	</span>
        <p>template by <a href="http://github.com/plasticneko">github.com/plasticneko</a></p>
        <p>this template is proudly open source</p>
    </div>
</div>
<!-- end of footer -->
</body>
</html>
