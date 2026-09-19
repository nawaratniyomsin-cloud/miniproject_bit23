<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Google Fonts Import */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Montserrat:wght@300;400;500&display=swap');

/* Reset & Layout Base */
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
    align-items: center;
    padding: 60px 20px;
    background-image: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, rgba(18, 18, 18, 1) 70%);
}

/* Header Action Links (หน้าจัดการ & ล็อคเอ้าท์) */
a {
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
    margin: 0 6px 30px 6px;
}

a:hover {
    background-color: #D4AF37;
    color: #121212;
    box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);
}

/* Luxury Data Table Container */
table {
    width: 100%;
    max-width: 800px;
    border-collapse: collapse !important; /* Overrides border=1 */
    border: 1px solid #2B2B2B !important;
    background-color: #1A1A1A;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
}

/* Table Headers */
thead {
    background-color: #121212;
    border-bottom: 2px solid #D4AF37;
}

th {
    font-family: 'Cinzel', serif;
    font-size: 0.85rem;
    letter-spacing: 2px;
    color: #D4AF37;
    text-transform: uppercase;
    padding: 18px 24px;
    text-align: left;
    border: none !important;
}

/* Table Rows & Cells */
td {
    padding: 16px 24px;
    font-size: 0.9rem;
    color: #CCCCCC;
    border: none !important;
    border-bottom: 1px solid #2B2B2B !important;
}

/* Subtle Row Hover Effect */
tbody tr {
    transition: background-color 0.3s ease;
}

tbody tr:hover {
    background-color: rgba(212, 175, 55, 0.04);
}
    </style>
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include "action/connect.php";
$sql = "SELECT * FROM bags";
$result = mysqli_query($con, $sql);
?>

    <a href="manage_bag.php">หน้าจัดการ</a>
     <a href="logout.php">ล็อคเอ้าท์</a>
    <table border=1>
        <thead>
            <th>รหัสกระเป๋า</th>
            <th>แบรนด์</th>
            <th>ขนาด</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["bag_id"] ?></td>
                    <td><?= $order["brand"] ?></td>
                    <td><?= $order["size"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>
