<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bulma Blog Dark 1</title>
    <!-- stylesheets -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulmacustom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!-- page header (title, etc) -->
<div class="main-header">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <div class="has-text-centered">
                    <!-- header && subheader -->
                    <h1 class="title is-1 is-spaced">E-Stuff</h1>
                    <h4 class="subtitle is-4">Follow us on facebook</h4>
                    <!-- end of header && subheader -->

                    <!-- header nav content -->
                    <div class="nav-center">
                        <a class="nav-item" href="">
		  <span class="icon">
		    <i class="fa fa-facebook"></i>
		  </span>
                        </a>
                        <a class="nav-item" href="">

                        </a>
                    </div>
                    <!-- end of header nav content -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end page header -->

<!-- page content -->
<div class="main-content">
    <div class="container">
        <!-- start of posts -->
        <div class="columns is-multiline is-centered has-text-centered">
            <!-- start of post -->
            <div class="column is-4">
                <div class="card">
                    <!-- image for post -->
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ asset('img/player.jpeg') }}" alt="img">
                        </figure>
                    </div>
                    <!-- end of image for post -->

                    <!-- post header -->
                    <div class="card-content-header">
                        <h4 class="title is-4"><a href="post.html">Portuguese e-sports players</a></h4>
                    </div>
                    <!-- end of post header -->

                    <!-- post content -->
                    <div class="card-content">
                        <div class="content">

                        </div>
                        <!-- end of post content -->

                        <!-- post footer -->
                        <div class="card-content-footer">
                            <i class="fa fa-calendar">
                                <small>11:09 PM - 1 Jan 2016</small>
                            </i>
                            <i class="fa fa-comment">
                                <small>20 comments</small>
                            </i>
                        </div>
                        <!-- end of post footer -->
                    </div>
                </div>
            </div>
            <!-- end of post -->

            <!-- start of post -->
            <div class="column is-4">
                <div class="card">
                    <!-- image for post -->
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ asset('img/hs.jpg') }}" alt="img">
                        </figure>
                    </div>
                    <!-- end of image for post -->

                    <!-- post header -->
                    <div class="card-content-header">
                        <h4 class="title is-4"><a href="post.html">Hearthstone in May</a></h4>
                    </div>
                    <!-- end of post header -->

                    <!-- post content -->
                    <div class="card-content">
                        <div class="content">

                        </div>
                        <!-- end of post content -->

                        <!-- post footer -->
                        <div class="card-content-footer">
                            <i class="fa fa-calendar">
                                <small>11:09 PM - 1 Jan 2016</small>
                            </i>
                            <i class="fa fa-comment">
                                <small>20 comments</small>
                            </i>
                        </div>
                        <!-- end of post footer -->
                    </div>
                </div>
            </div>
            <!-- end of post -->

            <!-- start of post -->
            <div class="column is-4">
                <div class="card">
                    <!-- image for post -->
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ asset('img/lcs.jpg') }}" alt="img">
                        </figure>
                    </div>
                    <!-- end of image for post -->

                    <!-- post header -->
                    <div class="card-content-header">
                        <h4 class="title is-4"><a href="post.html">Best of LCS</a></h4>
                    </div>
                    <!-- end of post header -->

                    <!-- post content -->
                    <div class="card-content">
                        <div class="content">

                        </div>
                        <!-- end of post content -->

                        <!-- post footer -->
                        <div class="card-content-footer">
                            <i class="fa fa-calendar">
                                <small>11:09 PM - 1 Jan 2016</small>
                            </i>
                            <i class="fa fa-comment">
                                <small>20 comments</small>
                            </i>
                        </div>
                        <!-- end of post footer -->
                    </div>
                </div>
            </div>
            <!-- end of post -->
        </div>
        <!-- end of posts -->
    </div>

    <!-- pagination -->
    <div class="pagination-style-custom">
        <div class="container has-text-right">
            <a class="button is-button-grey pagination-next">Show More Posts</a>
        </div>
    </div>
    <!-- end of pagination -->
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