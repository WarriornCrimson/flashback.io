<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Flashback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="images/logo.png" type="image/png">

</head>
<body>
 
<div class="main-div">
 
        <div class="container"> 
            <div class="logo">
                <i class="fa-solid fa-bars" id="nav-btn"></i>
                <h2>Flashback<span class="dot">.</span></h2>
            </div>
            <div class="add-flashcard-con">
                <i class="fa-solid fa-envelope-open-text" title="Notifications"></i>
                <i class="fa-solid fa-gear" title="Settings"></i>
                <button id="add-flashcard">Create Flashcard</button>
                <div class="profile">
                    <?php
                    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'")
                    or die('query failed');
                    if(mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);
                    }

                    if($fetch['image'] == ''){
                        echo '<img src="images/default-avatar.png" title="Account" id="avatar">';
                    }else {
                        echo '<img src="uploaded_img/' .$fetch['image'].'" id="avatar" title="Account">';
                    }
                    ?>

                    <div class="popup" id="popup">
                    <!--user detailsssssss-->
                        <div class="pic">
                        <?php
                            if($fetch['image'] == ''){
                            echo '<img src="images/default-avatar.png" title="Account" id="avatar">';
                        }else {
                            echo '<img src="uploaded_img/' .$fetch['image'].'" id="avatar" title="Account">';
                        }
                        ?>
                        
                        <div class="profile">
                            <p><?php echo $fetch['name']; ?></p>
                            <p><?php echo $fetch['email']; ?></p>
                        </div>
                        </div>
                        <div class="account">
                        <a href="update_profile.php">Account Settings</a>
                        <a href="login.php?logout=<?php echo $user_id; ?>">Log out</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="main-body">
                <!--nav bar-->
        <div class="nav-bar" id="navbar">
            <ul class="icon-list">
                <li>
                    <a href="#" class="flash">
                        <i class="fa-solid fa-clone" title="Flashcards"></i><span>Flashcards</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-feather" title="Quizzes"></i><span>Quizzes</span> 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-clock" title="Pomodoro"></i><span>Pomodoro Clock</span>
                    </a>
                </li>
                <li>
                    <a href="portfolio.php">
                        <i class="fa-solid fa-circle-info" title="Creator"></i><span>Admin</span>
                    </a>
                </li>
            </ul>
            <ul class="sign-out">
                <li>
                    <a href="flashback.php">
                    <i class="fa-solid fa-right-from-bracket" title="Exit"></i><span>Sign out</span>
                    </a>
                </li>   
            </ul>
        </div>

        <div class="main-container" id="mainContainer">
    
        <!--Display Card of Question and Answers Here-->
        <div id="card-con"> 
            <div class="card-list-container"></div>
        </div>

        </div>
        
        <!--Input form for users to fill-->
        <div class="question-container hide" id="add-question-card">
            <!--Close Button-->
            <i class="fa-solid fa-xmark" id="close-btn"></i>
            <h2 class="add-flash">Create Flashcard</h2>
            <div class="wrapper">
                <div class="error-con">
                    <span class="hide" id="error">Leave no input field empty!</span>
                </div>
            </div>

            <label for="question">Question:</label>
            <textarea class="input" id="question" placeholder="Type the question here..." rows="2"></textarea>
            <label for="answer">Answer: </label>
            <textarea class="input" id="answer" rows="4" placeholder="Type the answer here..."></textarea>
            <button id="save-btn">Save</button>
        </div>
        
        </div>

</div>


    <script src="main.js"></script>
</body>
</html>