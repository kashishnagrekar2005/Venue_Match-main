<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Venue Match</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="wedding-icon-font/flaticon.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">-->
    <link rel="stylesheet" type="text/css" href="css/dzsparallaxer.css">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>
<style>
    body {
        background-color: #F89880;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        background-color: #FEFEFA;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        font-weight: bold;
        text-align: center;
    }

    tbody {
        font-size: 95%;
        font-style: italic;
    }

    tfoot {
        font-weight: bold;
    }

    .center {
        margin-left: 10px;
        margin-right: 10px;

    }
</style>
<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "project");

include "Header.php";

$userid = $_SESSION['uid'];

//Login Check
if (!isset($_SESSION['uid'])) {
    header("location:user_login.php");
}

if (isset($_GET['did'])) {
    $did = $_GET['did'];
    $did = mysqli_query($c, "delete from tbl_feedback where feedback_id='{$did}'");
}
echo "<br>";
echo "<center>";
echo "<h1>Your Feedback Details </h1>";
echo "</center>";
echo "<br>";
$q = mysqli_query($c, "select * from tbl_feedback where user_id='{$userid}'");
$count = mysqli_num_rows($q);
echo "<table border='1' class='center'>";
echo "<tr>";

echo "<th>ID</th>";
echo "<th>Venue Title</th>";
echo "<th>Username</th>";
echo "<th>Date</th>";
echo "<th>Feedback Details</th>";
echo "<th>Rating</th>";
echo "<th>Delete</th>";
echo "</tr>";
$i = 0;

while ($table = mysqli_fetch_array($q)) {


    $cq = mysqli_query($c, "select * from tbl_venuemaster where venue_id='{$table['venue_id']}'");
    $crow = mysqli_fetch_array($cq);
    $cq1 = mysqli_query($c, "select * from tbl_user where user_id='{$table['user_id']}'");
    $crow1 = mysqli_fetch_array($cq1);

    echo "<tr>";



    echo "<td>{$table['feedback_id']}</td>";
    echo "<td>{$crow['venue_title']}</td>";
    echo "<td>{$crow1['user_name']}</td>";
    echo "<td>{$table['feedback_date']}</td>";
    echo "<td>{$table['feedback_details']}</td>";
    echo "<td>{$table['feedback_rating']}</td>";

    echo "<td class='requester-action'>" . "<a href='feedback_details.php?did={$table['feedback_id']}'><FONT COLOR=red>Delete</FONT></td>";
    echo "</tr>";
}



?>


