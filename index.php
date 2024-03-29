<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8"><!--CHARACTER SET DEFINITION-->
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0"><!--Setting the viewport to make your website look good on all devices-->
    <title>Personal Portfolio Website</title>
    <link rel = "stylesheet" href = "style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--<script> scr="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"</script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>

</head>
<body>
    <!--<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>-->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href = "#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!--home section start-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Shreya Deep</div>
                <div class="text-3">And I'm a <span>Student</span></div>
                <a href="https://www.linkedin.com/in/shreya-d-77ba24191/">Hire me</a>
            </div>
        </div>
    </section>
    <!--about section start-->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src = "images/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">
                        I'm Shreya and I'm a <span>junior at IIT Indore</span>
                    </div>
                    <p>Currenlty pursuing my B.Tech. from IIT Indore, I'm passionate about programming and the wonders it can create. My expertise includes Competitive Programming, Web Development, Data Structures and Algorithms and other CS topics like OOPS, DBMS and System Design. I have recently developed interest in Machine Learning and Open Source and exploring it.
                        I love problem solving and therefore, it's very likely for the most of the time
                         that you'll find me on major online judges like Codeforces, Codechef, Hackerearth, SPOJ and Leetcode. I also like to write my experiences in Blogs, so you can check that out too. Other than coding, I like to spend my time watching shows, listening to music and enjoying with my friends and family.</p>
                    <a href = "https://drive.google.com/file/d/1XGX4UPR8KpNJLPHJun56ZGBWKsV9Lls5/view?ts=612f63e6">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!--services section start-->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Coding Profiles</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <div class="text">
                            <div class = "site-1">
                               <a href="https://codeforces.com/profile/ayerhs_7">Codeforces</a> 
                            </div></div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">
                            <div class = "site-2">
                                <a href="https://leetcode.com/ayerhs_7/">Leetcode</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">
                            <div class = "site-3">
                                <a href="https://www.codechef.com/users/shreya_deep_7">Codechef</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text"><div class = "site-4">
                            <a href="https://www.hackerearth.com/@ayerhs_7">Hackerearth</a> 
                        </div></div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text"><div class = "site-5">
                            <a href="https://www.hackerrank.com/its_awesome">Hackerrank</a> 
                        </div></div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">
                            <div class = "site-6">
                                <a href="https://www.spoj.com/users/shreya_deep_7/">SPOJ</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--skills section start-->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
                My skills
            </h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My skills & experiences.</div>
                    <p>I'm skilled in web development (HTML, CSS, Javascript, PHP, MySQL, Reactjs and node.js) and problem solving and setting. Did an internship at Cantilever Labs where I learnt how to write about the DSA topics 
                        in well structured and understandable manner. I have worked on some personal and group projects as well where we made web platforms using the above mentioned tech stacks. I also have experience of writing blogs on some random programming topics.
                    </p>
                    <a href = "https://github.com/ayerhs7" >GitHub</a>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>ReactJS</span>
                        <span>60%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>NodeJS</span>
                        <span>50%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Javascript</span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>50%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>70%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--teams section start-->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="carousel owl-carousel">
                <a href="https://github.com/tutrend/firebase-edufriend">
                    <div class="card">
                        <div class="box">
                            <img src = "images/git.png" alt = "">
                        <div class="text">tuTrend</div>
                        <p>Content Management website for all your academic and non-academic (skill development) stuff </p>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/ayerhs7/IITISoC---Responsive-Image-gallery">
                    <div class="card">
                        <div class="box">
                            <img src = "images/git.png" alt = "">
                        <div class="text">Responsive Image Gallery</div>
                        <p>A responsive image gallery to view upload and view photos</p>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/ayerhs7/elgges">
                    <div class="card">
                        <div class="box">
                            <img src = "images/git.png" alt = "">
                        <div class="text">Library Management</div>
                        <p>A DBMS project for managing library resources</p>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/ayerhs7/elgges">
                    <div class="card">
                        <div class="box">
                            <img src = "images/git.png" alt = "">
                        <div class="text">Madad</div>
                        <p>Covid related help and support website of IIT Indore for donating and seeking donators</p>
                        </div>
                    </div>
                </a>
                
            </div>            
        </div>
    </section>

    <!--Contact section start-->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Thanks for visiting my website. Would love to hear from you!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Shreya Deep</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Patna,Bihar,India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">shreya.deep.7@gmail.com</div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type = "text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type = "email" placeholder="Email" required>
                            </div>
                        </div>
                            <div class="field">
                                <input type = "text" placeholder="Subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Describe project.." required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit">Send message</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!--footer section start-->
    <footer>
        <span>THANKS FOR VISITING!</span>
    </footer>

    <script src = "script.js"></script>
</body>
</html>
