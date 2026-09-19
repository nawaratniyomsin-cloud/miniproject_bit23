<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Google Fonts Import */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Montserrat:wght@300;400;500&display=swap');

/* Reset & Global Base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #121212;
    color: #EAEAEA;
    font-family: 'Montserrat', sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 24px;
    padding: 40px 20px;
    background-image: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, rgba(18, 18, 18, 1) 70%);
    text-align: center;
    font-size: 1.1rem;
    letter-spacing: 1px;
}

/* Styled Greeting Text (Targets raw text output inside body) */
body {
    color: #F9F6F0;
}

/* Styled Links / Buttons (Targets raw <a> tag directly) */
a {
    display: inline-block;
    color: #D4AF37;
    text-decoration: none;
    border: 1px solid #D4AF37;
    padding: 12px 28px;
    font-size: 0.8rem;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    transition: all 0.4s ease;
    margin-top: 10px;
}

a:hover {
    background-color: #D4AF37;
    color: #121212;
    box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);
}
    </style>
</head>
<body>
    <?php
        session_start();
        
            if(!isset($_SESSION["username"])){
            header("location: login.php");
            exit;
            }
        ?>

        สวัสดี คุณ <?= $_SESSION["username"] ?>

        <a href="index.php">หน้าหลัก</a>
</body>
</html>