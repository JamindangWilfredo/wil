<?php
    include('includes/head.php');
?>
<body>
    <header class="navigation">

        <div class="logo-img">
            <img src="https://cdn-icons-png.flaticon.com/512/6352/6352331.png" alt="">

            <p><a href="?home">WIL<span class="web-span">SITE</span></a></p>
        </div>

        <div class="navigation-bar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>" aria-current="page" href="?home">Home</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($activePage == 'aboutme') ? 'active' : ''; ?>" href="?aboutme">About Me</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activePage == 'projects') ? 'active' : ''; ?>" href="?projects">Projects</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>" href="?contact">Contact</a>
                            </li>
            </ul>
        </div>
    </header>

<!-- PHP Section -->
<?php
    // Determine which page is active based on the query parameter
    $activePage = '';

    if (isset($_GET['home'])) {
        $activePage = 'home';
        include_once('home.php');    
    } elseif (isset($_GET['aboutme'])) {
        $activePage = 'aboutme';
        include_once('aboutme.php');    
    } elseif (isset($_GET['projects'])) {
        $activePage = 'projects';
        include_once('projects.php');    
    } elseif (isset($_GET['contact'])) {
        $activePage = 'contact';
        include_once('contact.php');    
    } else {
        // Default page if no parameter is set
        $activePage = 'home';
        include_once('home.php');  
    }
?>

    <!--
        <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
        </div > 
    -->


        <section class="container-mb">

            <div class="sec-1">

                <div class="sec-2">
                    <img src="img/profile.jpg" alt="">
                </div>

                <h1>I'm Wilfredo <span>Jamindang</span></h1>
                <p class="title"><i>Web Developer</i></p>
                <br>
                <div class="sentence">
                    <p>I am the one who designs the website using HTML, CSS and Javascript and sometimes becomes the back end but in easy tasks such as connecting to the database using php and what they call the CRUD function I am the one who designs the website using HTML, CSS and Javascript and sometimes becomes the back end but in easy tasks such as connecting to the database using php and what they call the CRUD function.</p>
                </div>
                
            </div>
        </section>

<?php
    include('includes/footer.php');
?>