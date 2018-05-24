<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bulma Blog Dark 1</title>
    <!-- stylesheets -->
    <link href="{{ asset('bulma2.css') }}" rel="stylesheet">
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
        <div class="columns is-multiline is-centered">
            <!-- start of post -->
            <div class="column is-9">
                <div class="card">
                    <!-- image for post -->
                    <div class="card-image">
                        <figure class="image">
                            <img src="{{ asset('img/player.jpeg') }}" alt="img">
                        </figure>
                    </div>
                    <!-- end of image for post -->

                    <!-- post header -->
                    <div class="card-content-header has-text-centered">
                        <h4 class="title is-4">Portuguese e-sports players</h4>
                    </div>
                    <!-- end of post header -->

                    <!-- post content -->
                    <div class="card-content">
                        <div class="content">
                            <div class="card-inner-wrapper">
                                <!-- post text -->
                                <div class="card-content-text">
                                    <p> Phasellus bibendum lectus magna, vitae sagittis orci feugiat non. Aenean varius
                                        diam vel nunc tincidunt congue. In hendrerit nulla quis justo hendrerit
                                        placerat. Aliquam volutpat nisl id nulla scelerisque, et dictum metus interdum.
                                        Integer hendrerit pellentesque velit, efficitur dapibus enim efficitur nec.
                                        Integer quis imperdiet nulla, in commodo lectus. Nunc vitae diam accumsan,
                                        rutrum urna vitae, ultricies velit. Vivamus rhoncus volutpat quam, id iaculis
                                        erat placerat vitae. Proin vehicula sodales odio, et dignissim turpis aliquet
                                        vel.</p>
                                    <p>Donec id nulla mauris. Suspendisse auctor felis id orci pulvinar, quis ultricies
                                        enim porttitor. Maecenas posuere, metus nec luctus interdum, sapien velit
                                        faucibus turpis, in cursus magna nulla vitae elit. Phasellus eleifend nulla eu
                                        facilisis malesuada. Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos himenaeos. Nulla at ex et orci rutrum venenatis et gravida
                                        elit. Phasellus fermentum, metus vel euismod finibus, velit arcu euismod ipsum,
                                        vitae dapibus ipsum magna sit amet elit. In vestibulum, urna ut fringilla
                                        mollis, augue turpis laoreet metus, id placerat quam odio vel justo. Phasellus a
                                        lectus et felis porta tempor. </p>

                                    <div class="columns is-multiline is-mobile">
                                        <div class="column "></div>
                                        <div class="column is-three-quarters">
                                            <video controls>
                                                <source src="{{ asset('movie.mp4')}}" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="column"></div>
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
                <!-- end of post content -->

                <br/>

                <!-- post comments -->
                <div class="comments-content">
                    <!-- comment header -->
                    <div class="comments-header has-text-centered">
                        <h4 class="title is-4">Comments</h4>
                    </div>
                    <!-- end of comment header -->

                    <div class="comments-wrapper">
                        <!-- comments content -->
                        <div class="comments-content">
                            <!-- start of comment -->
                            <article class="media">
                                <!-- comment user image -->
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="http://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <!-- end of comment user image -->

                                <!-- comment content -->
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Barbara Middleton</strong>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros
                                            lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit
                                            amet dolor blandit rutrum. Nunc in tempus turpis.</p>
                                        <small><a>Like</a> | <a>Reply</a> | 3 hrs</small>
                                    </div>

                                    <!-- start of sub-comment -->
                                    <article class="media">
                                        <!-- sub-comment user image -->
                                        <figure class="media-left">
                                            <p class="image is-48x48">
                                                <img src="http://bulma.io/images/placeholders/96x96.png">
                                            </p>
                                        </figure>
                                        <!-- end of sub-comment user-image -->

                                        <!-- start of sub-comment content -->
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Sean Brown</strong>
                                                <p>Donec sollicitudin urna eget eros malesuada sagittis. Pellentesque
                                                    habitant morbi tristique senectus et netus et malesuada fames ac
                                                    turpis egestas. Aliquam blandit nisl a nulla sagittis, a lobortis
                                                    leo feugiat.</p>
                                                <small><a>Like</a> | <a>Reply</a> | 2 hrs</small>
                                            </div>

                                            <!-- start of sub-sub-comment -->
                                            <article class="media">
                                                <p>Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu
                                                    lorem cursus ullamcorper sit amet nec massa.</p>
                                            </article>
                                            <!-- end of sub-sub-comment -->

                                            <!-- start of sub-sub-comment -->
                                            <article class="media">
                                                <p>Morbi vitae diam et purus tincidunt porttitor vel vitae augue.
                                                    Praesent malesuada metus sed pharetra euismod. Cras tellus odio,
                                                    tincidunt iaculis diam non, porta aliquet tortor.</p>
                                            </article>
                                            <!-- end of sub-sub-comment -->
                                        </div>
                                        <!-- end of sub-comment content -->

                                    </article>
                                    <!-- end of sub-comment -->

                                    <!-- start of sub-comment -->
                                    <article class="media">
                                        <!-- start of sub-comment user image -->
                                        <figure class="media-left">
                                            <p class="image is-48x48">
                                                <img src="http://bulma.io/images/placeholders/96x96.png">
                                            </p>
                                        </figure>
                                        <!-- end of sub-comment user image -->

                                        <!-- start of sub-comment content -->
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Kayli Eunice </strong>
                                                <p>Sed convallis scelerisque mauris, non pulvinar nunc mattis vel.
                                                    Maecenas varius felis sit amet magna vestibulum euismod malesuada
                                                    cursus libero. Vestibulum ante ipsum primis in faucibus orci luctus
                                                    et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id
                                                    feugiat.</p>
                                                <small><a>Like</a> | <a>Reply</a> | 2 hrs</small>
                                            </div>
                                        </div>
                                        <!-- end of sub-comment content -->
                                    </article>
                                    <!-- end of sub-comment -->

                                </div>
                                <!-- end of comment content -->
                            </article>
                            <!-- end of comments -->

                            <!-- form begin -->
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="http://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="field">
                                        <p class="control">
                                            <textarea class="textarea" placeholder="Add a comment..."></textarea>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                            <button class="button is-button-grey">Post comment</button>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <!-- form end -->

                        </div>
                    </div>
                </div>
                <!-- end of comments -->

            </div>
            <!-- end of post -->
        </div>
        <!-- end of post column -->
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
<!-- end of footer -->
</body>
</html>