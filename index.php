<!DOCTYPE HTML>

<html lang = "en">

<head>

<meta charset="utf-8">
<meta name="viewport" content = "width = device-width, initial-scale = 1">

<title> Home </title>

<meta name="keywords" content="Andrew, Smith, Andrew Smith, Andrew Smith Developer, Full Stack Developer">

<meta name="description" content="Andrew Smith is a Full Stack Developer based in Lincoln and Nottingham">


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>

<link href = "indexcss.css" rel = "stylesheet" type = "text/css">


<link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption' rel='stylesheet' type='text/css'>
</head>



<body>

    <!-- Top Title bar with different sections to be shown/hidden-->

    <section id = "top-panel">

        <div id = "desktop-title">
            <h1 class = "title"> Andrew Smith - Full Stack Developer </h1>
        </div>


        <div id = "mobile-title">
            <h1 class = "title"> Andrew Smith <br> <span class = "title-2"> Full Stack Developer </span> </h1>
        </div>

        <div id = "mobile-title-mini">
            <h1 class = "title"> Andrew Smith <br> <span class = "title-2"> Full Stack Developer </span> </h1>
        </div>



    </section>

    <!-- Left hand side navigation bar -->
    <section id = "left-panel">
        <ul id = "navbar-list">
            <li> <a id = "portfolio-click"> Portfolio </a> </li>
            <li> <a id = "skills-click"> Skills </a> </li>
            <li> <a id = "projects-click"> Projects </a> </li>
            <li class = "hide"> <hr class = "mini-line hide" id = 'linkedinline'> </li>
            <li> <hr class = "mini-line"> </li>
            <li> <p class = "say-hello-line"> Say Hello? </p> </li>

            <li> <a class = "linkedinbutton" href = "https://uk.linkedin.com/in/andrew-smith-062756115" target = "_blank"> <img id = "image-social-1" alt = "The LinkedIn Logo" src = "linkedin.png" width = "42" height = "40"> </a> &nbsp; <a id = "hovercursor"> <a data-toggle="modal" data-target="#myModal"> <img alt = "email me!" id = "image-social-2" src = "EMAIL.png" width = "40" height = "40"> </a></a></li>

        </ul>

    </section>



    <!-- Main section of images -->
    <section id = "main-section" class = "container-fluid">

        <!-- anchor to scroll to -->
        <a name = "portfolio-anchor" id = "portfolio-anchor"> </a>

        <div class = "row">

            <div class = "col-xs-6 website-box fade-box">
                <a href = "http://www.ircs.org.uk/" target = "_blank">
                    <img alt = "Screenshot of the IRCS website" src = "screenshot2.png">
                    <div class = "skills">
                            <p> <span class = "projectTitle"> IRCS </span> <br/> <br/>HTML, CSS, JQuery, JavaScript, PHP, SQL, <br> MySQL, Bootstrap  </p>

                    </div>
                </a>
            </div>
            <div class = "col-xs-6 website-box fade-box">

                    <img alt = "Screenshot of my yourCMS website" src = "screenshot4.png">
                    <div class = "skills">
                        <p> <span class = "projectTitle"> yourCMS </span> <br/> <br/>HTML, CSS, Ajax, JavaScript, PHP, SQL, <br> MySQL, Bootstrap, PHPmyAdmin </p>
                    </div>

            </div>
        </div>

        <div class = "row">

            <div class = "col-xs-6 website-box fade-box">
                <a href = "http://andresmithdeveloper.com">
                    <img alt = "Screenshot of the website andrewsmithdeveloper.com" src = "screenshot5.png">
                    <div class = "skills">
                        <p> <span class = "projectTitle"> Portfolio </span> <br/> <br/>HTML, CSS, JQuery, JavaScript, PHP, SQL </p>
                    </div>
                </a>
            </div>

            <div class = "col-xs-6 website-box fade-box">
                <p class = "upcoming-text"> More projects coming soon. </p>

            </div>

        </div>


        <!-- Skills section -->

        <a name = "skills-anchor2" id = "skills-anchor2"> </a>
            <div class = "new-row row fade-box" id = "box4">
                <div class = "inside">

                    <h1 class = "section-title-big"> Skills </h1>
                    <hr class = "mini-line-left">
                    <h3 class = "section-title"> Development </h3>

                    <p class = "skills-list"> HTML, CSS, JavaScript, JQuery, PHP, SQL, C++, C#, Python, MySQL, Bootstrap, Git, GitHub, Linux BASH Commands, Responsive Web Design, PhpMyAdmin, MySQL Workbench </p>
                    <h3 class = "section-title"> Soft Skills </h3>
                    <a name = "skills-anchor" id = "skills-anchor"> </a>
                    <p class = "skills-list"> Customer Service, Communication, Friendly, Ambitious, Teamwork, Time Management, Reliability, Project Management </p>

                </div>

            </div>

            <!-- Projects section -->
            <div class = "new-row row fade-box" id = "box5">

                <div class = "inside">
                        <a id = "projects-anchor2"> </a>
                    <h1 class = "section-title-big"> Projects </h1>
                    <hr class = "mini-line-left">
                        <h3 class = "section-title"> Founder & President of the University of Lincoln Diabetes Group </h3>

                        <p class = "skills-list"> Founder and President of the UoL Diabetes Group. This role has strongly developed a range of skills such as confidence, maintaining responsibilities, organisation, leadership skills, delegating roles, communication and teamwork.</p>

                        <h3 class = "section-title"> ICT Service Desk Technician </h3>
                        <p class = "skills-list"> I complete a range of jobs for both students and staff in the University regarding fixing and solving problems with computers, laptops and mobile devices that use a range of operating systems. As well as this we give out computing and mobile device advice when consulted. </p>

                        <h3 class = "section-title"> Developer Support at SWA Design </h3>
                        <p class = "skills-list"> On-call developer making updates and adding new features to websites’ source code upon a client's request. </p>

                        <h3 class = "section-title"> Geospatial Plugins Developer at Isohypse UK </h3>
                        <p class = "skills-list"> Designing and developing plugins for GIS software as part of a team in Python and C#. </p>

                        <h3 class = "section-title"> First Year Computer Science Course Rep</h3>
                        <p class = "skills-list"> I am the first year Course Representative for Computer Science at University. I have gained a number of skills, most notably the ability to communicate well, the ability to plan well, manage time successfully, and solve problems in an effective manner.</p>

                        <h3 class = "section-title"> IT Tutor</h3>
                        <p class = "skills-list"> I volunteer at the Long Eaton 50+ Forum where I teach, aid and support over 50 year olds how to better understand the working of and the general use of their individual computing and mobile devices such as laptops, notebooks, desktop PCs, tablets and mobile devices. </p>

                        <h3 class = "section-title"> Chairman of Social Events </h3>
                        <p class = "skills-list">I was part of a Sixth Form Council as both the vice chairperson and chairperson of Social Events. This role showed me how rewarding it can be to go above and beyond in terms of being involved within an organisation in order to benefit it. </p>

                        <h3 class = "section-title"> Interview Panel </h3>
                        <p class = "skills-list"> I sat on an interview panel when the School of Computer Science were looking for new lecturers and researchers. I questioned interviewees on an example lecture and I gave detailed feedback to the Head of School on each interviewee.</p>

                        <!-- Anchor for the projects section scroll feature -->
                        <a id = "projects-anchor"> </a>

                        <h3 class = "section-title"> School of Computer Science Student Ambassador</h3>
                        <p class = "skills-list">Worked as a Student Ambassador within the School of Computer Science, helping out with things such as Open Days, Applicant Open Days, School liaison events and other odd jobs around the School.</p>

                        <h3 class = "section-title"> Contract IT & Media Consultant </h3>
                        <p class = "skills-list"> Worked as an IT and Media Consultant, completing a range of media solutions for an inspection as well as solving IT problems within the practice.</p>

                        <h3 class = "section-title">  Work Placement at AOL</h3>
                        <p class = "skills-list">I undertook a week placement at AOL's Office in London which allowed me to work in a specialised web development and software environment to gain valuable advice from experts and professionals within a multinational company.</p>

                        <h3 class = "section-title"> Work Placement at Brooks Computer Repair Shop </h3>
                        <p class = "skills-list"> Completed a week placement in a local Computer repair shop. It allowed me to understand how to work professionally and give out great customer service.</p>
                        <br>


                </div>
            </div>




    </section>

    <!-- Footer -->
        <div id = "footer-holder">

            <footer id = "footer">
                <hr id = "bottom-line">
                <p class = "say-hello-line"> Say Hello? </p>
                 <a class = "linkedinbutton" href = "https://uk.linkedin.com/in/andrew-smith-062756115" target = "_blank"> <img alt = "The LinkedIn logo" src = "linkedin.png" width = "42" height = "40"> </a> <a data-toggle="modal" data-target="#myModal"> <img alt = "Email me!" src = "EMAIL.png" width = "40" height = "40"> </a>
                 <br>
                <br>
            </footer>
        </div>


        <!-- Hidden modal for contact form -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">


              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Say Hello!</h4>
                </div>
                <div class="modal-body">

        <!-- Contact form -->
        <div class="alert alert-sign alert-success hidden"></div>
        <form  action="sayhello.php" method="POST" enctype="multipart/form-data" class = "send" role = "form">
            <div class = "form-group">
                <input type="hidden" class="form-control" name="action" value="submit">
            </div>

            <div class = "form-group">
                <input name="name" class="form-control" placeholder = "Name" type="text" value="" size="30"/><br>
            </div>

           <div class = "form-group">
               <input name="email" class="form-control" placeholder = "Email" type="text" value="" size="30"/><br>
           </div>

           <div class = "form-group">
              <textarea placeholder="Message" class = "form-control" name="message" rows="10" cols="30"></textarea><br>
              <input type="submit" class="btn btn-primary form-control" value="Send"/>
          </div>
        </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>



        <script>

        $(document).ready(function() {

            //Left hand side navigation bar scrolling features

            $("#portfolio-click").click(function() {
                var container = $('#main-section'), scrollTo = $('#portfolio-anchor');
                container.animate({scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()})
            });

            $("#skills-click").click(function() {
                var container = $('#main-section'), scrollTo = $('#skills-anchor2');
                container.animate({scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()})
            });

            $("#projects-click").click(function() {
                var container = $('#main-section'), scrollTo = $('#projects-anchor2');
                container.animate({scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()})
            });


            //Send form AJAX
            $(".send").submit(function(e){
            				    $.ajax({
            				        url: 'sayhello.php',
            				        type: 'post',
            				        data: $(this).serialize(),
            				        success: function(data) {
            		                    if(data){
            			                	$('.alert-sign').removeClass('hidden').hide().html(data).fadeIn();

                                        }

            				        }
            				    });

            				    e.preventDefault();
            				});

            //Moves the height for responsive design
            var height = $(window).height();
            var width = $(window).width();

            if(width >610){
                $("#main-section").css("height", height);
            }


            $("#portfolio-anchor").css("color", "black");

            var hidden = true;

            $('#linkedinline').hide();
            $('.linkedinbutton').hide();
            $('#email-link').hide();
            $('li').hide();
            $(".fade-box").hide();

            //Fade the box for the hover over effect
            $(".website-box").mouseenter(function(){
                $(this).find(".skills").fadeIn();
            });

            $(".website-box").mouseleave(function(){
                $(this).find(".skills").fadeOut();
            });

            //On load animation
            $(".fade-box").each(function(i) {
               $(this).delay((i + 1) * 150).fadeIn();
               $('#linkedinline').delay((i + 1) * 150).fadeIn();
               $('.linkedinbutton').delay((i + 1) * 150).fadeIn();
               $('#email-link').delay((i + 1) * 150).fadeIn();
            });



            $('li').each(function(i) {
               $(this).delay((i + 1) * 30).slideDown();
            });


            $("#top-panel h1").slideDown();
            $("#top-panel h2").slideDown();

            //Scrolling feature for changing the colour of the navigation bar bits
            $("#main-section").on('scroll', function() {

                //if scrolled to certain point on the page
                if($(this).scrollTop()>=$('#portfolio-anchor').position().top){
                    //Change the colour of the navigatiom bar element
                    $("#portfolio-click").css("color", "black");
                    $("#skills-click").css("color", "white");
                    $("#projects-click").css("color", "white");
                }

                if($(this).scrollTop()>=$('#skills-anchor').position().top){
                    $("#skills-click").css("color", "black");
                    $("#portfolio-click").css("color", "white");
                    $("#projects-click").css("color", "white");
                }


                if($(this).scrollTop()>=$('#projects-anchor').position().top){
                    $("#projects-click").css("color", "black");
                    $("#portfolio-click").css("color", "white");
                    $("#skills-click").css("color", "white");
                }
            })

        });

        </script>
</body>


</html>
