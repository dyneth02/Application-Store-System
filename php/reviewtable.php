<?php require_once('./header.php');
require_once('./connection.php') ?>
<?php

    $insertok = $_GET['insert'];

    if (isset($_GET['insert']) && $insertok == 'true') {
        echo '<script>setTimeout(function() { alert("Review Successfully Added");}, 1000); </script>';
    }

    if(!isset($_SESSION['userid'])) {
        header('Location:./login_page.php');
    }

    //initialize data user variable
    $review_array = '';

    //fetch user variable

    $sql_query = "SELECT * FROM reviews ORDER BY Review_ID";
    $reviews = mysqli_query($conn, $sql_query);
    //if query execute sucssfully
    if ($reviews) {
        while ($review = mysqli_fetch_assoc($reviews)) {
            $review_array .= "<tr>";
            $review_array .= "<td> {$review['Review_ID']} </td>";
            $review_array .= "<td> {$review['User_Name']} </td>";
            $review_array .= "<td> {$review['App_Name']} </td>";
            $review_array .= "<td> {$review['Rating']} </td>";
            $review_array .= "<td> {$review['Review']} </td>";

            if($review['User_Name'] == $_SESSION['username']) {
                $review_array .= "<td> <a href=\"updatereview.php?uname={$review['User_Name']}&reId={$review['Review_ID']}\" class=\"update\"><button name='update'>Update</button></td>"; 
                
                $review_array .= "<td> <a href=\"deletereview.php?uname={$review['User_Name']}&reId={$review['Review_ID']}\" class=\"delete\"><button name='delete'>Delete</button></td>";
                $review_array .= "</tr>";
            }
            else {
                $review_array .= "<td> <a href=\"updatereview.php?uname={$review['User_Name']}&reId={$review['Review_ID']}\" ><button name='update' class=\"dupdate\" disabled>Update</button></td>"; 
                
                $review_array .= "<td> <a href=\"deletereview.php?uname={$review['User_Name']}&reId={$review['Review_ID']}\" ><button name='delete' class=\"ddelete\" disabled>Delete</button></td>";
                $review_array .= "</tr>";
            }
        }
    }
    else {
        echo "Database Query Failed !!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Management</title>
    <link rel="stylesheet" href="./feedbacktable.php">
    <link rel="stylesheet" href=".utility.css">
    <style>

        body {
            background-color: #f0f5f5;
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1.main_txt {
            position: relative;
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin: 2rem 0;
            font-weight: 600;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 1.5em;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 1.1rem;
        }

        th {
            background-color: #009688;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
            transition: background-color 0.3s ease-in-out;
        }

        .delete button, .update button {
            padding: 0.6em 1.5em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .dupdate {
            padding: 0.6em 1.5em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            background-color: #a1a1a1;
            cursor: not-allowed;
            color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .ddelete {
            padding: 0.6em 1.5em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            background-color: #a1a1a1;
            cursor: not-allowed;
            color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .delete button {
            background-color: #e91e63;
        }

        .update button {
            background-color: #3f51b5;
        }

        .delete button:hover {
            background-color: #c2185b;
        }

        .update button:hover {
            background-color: #303f9f;
        }

        td button {
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        td {
            color: #333;
        }

        /* Mobile-friendly adjustments */
        @media (max-width: 768px) {
            table {
                width: 95%;
            }
            
            th, td {
                padding: 1em;
                font-size: 1rem;
            }

            h1.main_txt {
                font-size: 2rem;
            }

            td button {
                padding: 0.5em 1em;
                font-size: 0.9rem;
            }
        }


    </style>
</head>
<body>
    

    <!-- table starts here  -->
    <h1 class="main_txt">Review</h1>

    <table class="user_list">
        <tr>
            <th>Review ID</th>
            <th>User Name</th>
            <th>App Name</th>
            <th>Rating</th>
            <th>Review</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php echo $review_array; ?>;
    </table>
    <?php require_once('./footer.php') ?>

</body>
</html>