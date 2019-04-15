<?php
// Setting Cookies

$cookie_value = "Employee Management";
setcookie("sitename", $cookie_value, time() + 3600, "/", 1, 1);

// Contact Us Form submit Script
$message = '';
if (isset($_POST['submit'])) {
    /*Form Data */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    // Website Owner Mail send
    $to = "rashik.i.nahian@gmail.com";
    $subject = "Responses from Contact Us Page";
    $txt = "Full Name: $name ,  Email: $email <br> Message $subject";
    $headers = "From: no-reply@employeemanagement.com" . "\r\n" .
        "CC: ";

    //User Mail send
    $subject2 = "Thank You";
    $txt2 = "Thank You for your request.We will get back to you soon";

    //Mail Sending Function
    $flag = mail($to, $subject, $txt, $headers);
    mail($email, $subject2, $txt2, $headers);

    // Confirmation Message
    if ($flag) {
        $message = "Successfully Sumbmitted!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Email Not Sent";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

?>
<html>

<head>


    <!-- We use Cookies Message from  https: //cookieconsent.insites.com -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                },
                "content": {
                    "href": "#"
                }
            })
        });

    </script>

    <!-- Service Worker -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="google" content="notranslate" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="0" />
    <script>
        // register service worker:
        if (navigator.serviceWorker) {
            navigator.serviceWorker.register('/service-worker.js').then(function() {
                    return navigator.serviceWorker.ready;
                })
                .then(function(registration) {
                    console.log(registration); // service worker is ready and working...
                });

            navigator.serviceWorker.addEventListener('message', function(event) {
                console.log(event.data.message); // Hello World !
            });
        }

    </script>
    <!-- ./Service Worker -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style_front.css">
    <title>Employee Managment System</title>
</head>

<body>
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="menu">
            <li>Home</li>
            <li><a href="#about">About</a></li>
            <li><a href="#map">Address</a></li>
            <li><a href="#contact">Contact</a></li>
            <hr>
            <li><a href="employee/">Login</a></li>
            <li><a href="employee/register.php">Register</a></li>

            <hr>
            <li><a href="admin/">Admin</a></li>
        </ul>

    </div>
    <h1 class="logo">Employee Managment System</h1>
    <br><br>

    <br>

    <br>

    <!-- Slider -->
    <div class="slider">
        <div><img src="images/pexels-photo-1181306.jpeg"></div>
        <div><img src="images/pexels-photo-140945.jpeg"></div>
        <div><img src="images/pexels-photo-1619841.jpeg"></div>
    </div>
    <!-- ./Slider -->
    <!-- About Section -->
    <div class="page">
        <section id="about">
            <h1>About</h1>
            <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend, lectus vel convallis aliquet, ex est pulvinar leo, sollicitudin porttitor ex felis ac nunc. Nulla facilisi. Etiam bibendum tellus a dui venenatis tempus. Quisque sed risus id orci cursus rhoncus nec a purus. Vivamus tincidunt, ipsum a facilisis euismod, neque turpis tempor nibh, a venenatis sem nibh vitae nibh. Nam consectetur felis at rhoncus bibendum. Aliquam eget elit dapibus, ullamcorper augue a, tristique arcu. Vestibulum posuere sed tellus dapibus dictum. Nam venenatis condimentum nulla. Nulla porta fermentum dignissim. Integer orci sapien, facilisis egestas imperdiet vel, vestibulum a risus. Nulla tempus eu risus sodales pharetra.
            </p>
            <p>
                Donec sagittis, est vel euismod venenatis, nibh lectus blandit nisi, at convallis leo neque sed sapien. Proin congue pulvinar neque, non viverra enim congue non. Nulla ut commodo enim, vel scelerisque diam. Proin consequat, ex et dapibus tempus, turpis nisi viverra elit, et consequat ante leo eu justo. Integer at urna in augue porta lobortis non vitae leo. Praesent lobortis orci a odio pharetra porttitor. Sed porttitor ultrices libero et dignissim. Aenean ut nisl vel lectus accumsan auctor. Aenean odio orci, vulputate quis tristique nec, vulputate vel leo. Nam dapibus purus nec massa scelerisque feugiat. Aliquam dictum sapien lacinia elit lacinia mattis. Nam quam dolor, sodales id efficitur sit amet, rhoncus id tortor.
            </p>
        </section>
        <!-- ./About Section -->
        <!-- Google Map -->
    </div>
    <section id="map">
        <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=23.8153939,90.4260775913582&amp;q=+(North%20South%20University)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe></div><br />
    </section>
    <!-- ./Google Map -->

    <!-- Contact Us-->
    <h1>Contact Us</h1>
    <section id="contact" class="page">
        <form method="post" name="contactForm" onsubmit="return contact()">
            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="lname">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            <div class="g-recaptcha" data-sitekey="6LdSL54UAAAAAP9YjJt9m6ZULnMmrxclZY9fciWq"></div>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
    <!-- ./Contact Us-->

    <!-- Footer-->
    <footer id="sticky">&copy&nbspEmployee Managment System 2019</footer>
    <!-- ./Footer-->

    <!-- Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        //Slider
        $(document).ready(function() {
            $('.slider').bxSlider();
        });
        //Side Bar Toogle
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle('active');
        }

        //Contact Form Validation
        function contact() {
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"];
            var subject = document.forms["contactForm"]["subject"];


            if (name.value == "") {
                alert("Please enter your name.");
                name.focus();
                return false;
            }
            if (email.value == "") {
                alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf("@", 0) < 0) {
                alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0) {
                alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (subject.value == "") {
                window.alert("Please enter your message.");
                phone.focus();
                return false;
            }

            return true;
        }

    </script>

    <!-- Google ReCaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        $("#newsletter").submit(function(event) {

            var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha === "") {
                event.preventDefault();
                alert("Please check the recaptcha");
            }
        });

    </script>
</body>

</html>
