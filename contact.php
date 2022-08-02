<!DOCTYPE html>
<!-- Portfolio education page -->
<!-- Last updated by Alex Ren on 07/30/2022 -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alex Ren's Engineering Portfolio</title>
        <meta name="description" content="Alex Ren's engineering portfolio">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="contact.css">
        <!--<base href="alexjren.github.io/" target="_self">-->
        <script src="https://kit.fontawesome.com/c8dd9d74ce.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="page-wrapper">
            <header id="header">
                <h1 id="logo">
                    <a href="index.html" id="PageName">Alex Ren's Portfolio</a>
                </h1>
                <nav id="nav">
                    <ul class="nav-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about_me.html">About Me</a></li>
                        <li><a href="education.html">Education</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="main-container">
                <section class="section-info-container title-container" id="contact">
                    <div class="header-content">
                        <div id="title-text">
                            <div id="text-content">
                                <h1>Contact Me</h1>
                                <hr>
                                <h2>Please feel free to contact me with any questions or 
                                    comments.<br> The best way to reach me is by email at 
                                    <a href="mailto: aren3@jhu.edu">aren3@jhu.edu</a> or 
                                    just <br>fill out the form below!</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="main-content">
                    <?php include 'contact_form.php';?>
                </div>
            </div>
    
            <footer id="footer">
                <div class="contact-info">
                    <ul class="contact-list">
                        <li>
                            <h1>Phone</h1>
                            <a>408-464-5891</a>
                        </li>
                        <li>
                            <h1>Email</h1>
                            <a href="mailto: aren3@jhu.edu">aren3@jhu.edu</a>
                        </li>
                        <li>
                            <h1>Follow</h1>
                            <ul class="socials">
                                <li>
                                    <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BtMLqGqXMTKyujCK4CXozFg%3D%3D" target="_blank"
                                        rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>