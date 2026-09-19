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
    padding: 60px 20px;
    background-image: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, rgba(18, 18, 18, 1) 70%);
}

/* Raw Form Container (add_bag / edit_bag card) */
form {
    background: #1A1A1A;
    border: 1px solid #2B2B2B;
    padding: 50px 40px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
    position: relative;
    margin-top: 20px;
}

/* Gold Accent Line at Top of Form */
form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 2px;
    background: #D4AF37;
}

/* Field Labels */
label {
    display: block;
    font-size: 0.75rem;
    letter-spacing: 1.5px;
    color: #888888;
    text-transform: uppercase;
    margin-top: 24px;
    margin-bottom: 8px;
}

/* Raw Inputs (Text, Number, etc.) */
input[type="text"],
input[type="number"],
input[type="file"] {
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid #333333;
    padding: 10px 0;
    color: #FFFFFF;
    font-size: 0.95rem;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
    outline: none;
}

input[type="text"]:focus,
input[type="number"]:focus {
    border-bottom-color: #D4AF37;
}

/* Raw Select Dropdowns */
select {
    width: 100%;
    background: #121212;
    border: none;
    border-bottom: 1px solid #333333;
    padding: 10px 0;
    color: #FFFFFF;
    font-size: 0.95rem;
    font-family: 'Montserrat', sans-serif;
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

select:focus {
    border-bottom-color: #D4AF37;
}

select option {
    background-color: #1A1A1A;
    color: #FFFFFF;
    padding: 10px;
}

/* Submit Button */
button,
input[type="submit"] {
    width: 100%;
    background-color: transparent;
    color: #D4AF37;
    border: 1px solid #D4AF37;
    padding: 14px;
    font-size: 0.8rem;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.4s ease;
    margin-top: 36px;
}

button:hover,
input[type="submit"]:hover {
    background-color: #D4AF37;
    color: #121212;
    box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);
}

/* Back / Navigation Links (a tags outside form) */
body > a {
    display: inline-block;
    color: #D4AF37;
    text-decoration: none;
    border: 1px solid #D4AF37;
    padding: 10px 22px;
    font-size: 0.75rem;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: all 0.4s ease;
    margin-bottom: 10px;
}

body > a:hover {
    background-color: #D4AF37;
    color: #121212;
    box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);
}
    </style>
</head>
<body>

    <?php
        $id = $_GET["id"];

        include "action/connect.php";

        $sql = "SELECT * FROM bags WHERE bag_id = '$id' ";

        $result = mysqli_query($con, $sql);

        $order = mysqli_fetch_assoc($result);
    ?>

    <a href="manage_bag.php">หน้าจัดการ</a>
    
    <form action="action/update_bag.php" method="post">

        <label for="">แบรนด์</label>
        <input type="text" name="brand" value="<?= $order["brand"] ?>" > <br>

        <label for="">ขนาด</label>
        <input type="text" name="size" value="<?= $order["size"] ?>" > <br>

        <input type="hidden" name="bag_id" value="<?= $order['bag_id'] ?>">

        <br>
        <button>บันทึก</button>

    </form>

</body>
</html>