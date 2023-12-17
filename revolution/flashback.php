<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Flashback</title>
    <link rel="stylesheet" href="flashback.css">
    <script src="flashback.js"></script>
    <link rel="icon" href="images/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
      
<div class="main-page-container">
    <div class="top-part">
    <!--Navbar--> 
    <header class="header">
        <h1 class="logo">Flashback</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <!-- <button class="login">Login</button> -->
        </nav>
    </header>
    </div>
    <main> 
        <!--First div of the body. contains the introductory statement-->
        <div class="first-part" id="home">
            <div class="intro">
                <h1>Flashcards Builder</h1>
                <p>Make studying efficient and effective by creating flashcards.
                <br>Be productive. Stay smart. Be an academic achiever. 
                </p>
                <div class="buttons">
                <button class="get-started" onclick="gotolog()">Login</button>
                <button class="register" onclick="gotosign()">Register</button>
                </div>
            </div>
        </div>
        <div class="second-part" id="about">
            <div>
                <img src="images/logo.png"  class="photo1">
            </div>
            <div class="content1">
                <h3>About us</h3>
                <p>Flashback is a website serving as an efficient platform for studying, specifically through creating virutal flashcards that will help students embed knowledge in their long term memory and assist them in retaining information whenever they need.
                </p>
            </div>
        </div>

        <div class="third-part"><!--reveal the features or what makes it special-->
            <h2>Our Features</h2>
            <div class="third-part-content">
                <div class="box">
                    <i class='bx bx-time-five'></i>
                    <h3>Saves Time</h3>
                    <p>Making physical flashcards can be a tedious job. However, with Flashback, without the cumbersome requirements to gather up materials to create flashcards, students can immediately start learning in their own personal space.</p>
                </div>
                <div class="box">
                    <i class='bx bx-briefcase-alt-2'></i>
                    <h3>Less Hassle</h3>
                    <p>Flashback is a website dedicated to be a platform where students get to achieve their goal of being intellectually enriched. With just a few clicks and tricks, are exposed to a learning environment where everything is in organization.</p>
                </div>
                <div class="box">
                    <i class='bx bx-table' ></i>
                    <h3>Minimalist</h3>
                    <p>Flashback is designed with both non and tech savvy students in mind. Considering that studying can be strenuous at times, this website is structured with a minimalistic design preventing users from being too drained and overwhelmed.</p>
                </div>
            </div>
        </div>

        <div class="fourth-part"><!--how to use-->
        <img src="images/flashback.PNG">
        <h2>Statistics</h2>
           <div class="fourth-part-content">
            <blockquote> "Researchers have found favorable results when comparing the test grades of students who used flashcards as a study method to those who didn’t. One study looked at 470 students in an Intro to Psychology college course. Over 70% of the class used flashcards to study, and they performed significantly better on exams than those who didn’t."</blockquote>
            <br>
            <figcaption>- Herzing University (2023)</figcaption>
           </div>
        </div>
    </main>

    <footer>
            <div class="footer-last" id="contact">
                <div class="last-container">
                    <div class="last-info">
                        <label for="email" class="sign-label">sign up for updates:</label>
                        <input type="text" id="email" placeholder="email address">
                        <button class="submit2">submit</button>
                    </div>
                        <p>by signing up you agree to our&nbsp;<a href="#last">terms</a>.</p>
                
                <div class="socs">
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-instagram-alt' ></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-tiktok' ></i>
                </div>

                <div class="further-info">
                    <a href="#privacy-policy">privacy policy </a>|
                    <a href="#privacy-policy">terms</a>|
                    <a href="#privacy-policy">accessibility</a>|
                    <a href="#privacy-policy">set my cookie choices</a>|
                    <a href="#privacy-policy">cookie policy</a>
                    <p>&copy; 2023 tori corporations</p>
                </div>
            </div>
    </footer>

</div>

</body>

</html>
