<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SCHOOL|WEBSITE</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
<div class="wrap">
        <header id="header" style="padding-bottom:5px">
            <div class="">
                <div class="row">
                    <div >
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/1.jpg" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" >
                            <ul class="dropdown menu">
                                <li ><a href="/teacherhome">Home</a></li>

                                <li><a href="/syllabus">Upload Syllabus</a></li>

                                <li><a href="/tnotes">Upload Notes</a></li>

                                <li><a href="/uploadtt">Upload TimeTable</a></li>

                                <li><a href="/result">Upload result</a></li>

                                <li class='active'><li><a href="/feedback">view Feedback</a></li>

                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner banner-secondary" id="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner-caption">
                        <h2>View Feedbacks</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="table-responsive" style="font-size:20px">
            <table class="table" boreder="1px,black,solid">
                <tr>
                    <th>ID</th>
                        <th>Feedback</th>
                </tr>
                @foreach($res as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->feedback}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/3.jpg" alt="Venue Logo">
                        </div>
                        <p>High school is what kind of grows you into the person you are. I have great memories, good and bad, some learning experiences and some that I’ll take with me the rest of my life.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/about"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="/contact"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i>  Ernakulam Cochin</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+91 8956745637</a></li>
                            <li><span>Email:</span><a href="#">contact@school.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2020 <a href="#">Learning.com</a></p>
    </div>
</body>
</html>