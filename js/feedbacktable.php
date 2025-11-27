<?php require_once('./header.php');
require_once('./connection.php'); ?>
<?php

    $insertok = $_GET['insert'];

    if (isset($_GET['insert']) && $insertok == 'true') {
        echo '<script>setTimeout(function() { alert("Feedback Successfully Added");}, 1000); </script>';
    }

    if(!isset($_SESSION['userid'])) {
        header('Location:./login_page.php');
    }

    //initialize data user variable
    $feedback_array = '';

    //fetch user variable

    $sql_query = "SELECT * FROM feedback ORDER BY User_ID";
    $feedbacks = mysqli_query($conn, $sql_query);
    //if query execute sucssfully
    if ($feedbacks) {
        while ($feedback = mysqli_fetch_assoc($feedbacks)) {
            $feedback_array .= "<tr>";
            $feedback_array .= "<td> {$feedback['Feedback_ID']} </td>";
            $feedback_array .= "<td> {$feedback['User_ID']} </td>";
            $feedback_array .= "<td> {$feedback['Name']} </td>";
            $feedback_array .= "<td> {$feedback['Content']} </td>";
            $feedback_array .= "<td> {$feedback['Published_date']} </td>";

            if($feedback['User_ID'] == $_SESSION['userid']){
                $feedback_array .= "<td> <a href=\"updatefeedback.php?userId={$feedback['User_ID']}\"><button name='update' class=\"update\">Update</button></td>"; 
                
                $feedback_array .= "<td> <a href=\"deletefeedback.php?userId={$feedback['User_ID']}\"><button name='delete' class=\"delete\">Delete</button></td>";
                $feedback_array .= "</tr>";
            }
            else {
                $feedback_array .= "<td> <a href=\"updatefeedback.php?userId={$feedback['User_ID']}\"><button name='update' class=\"update\" disabled>Update</button></td>"; 
                
                $feedback_array .= "<td> <a href=\"deletefeedback.php?userId={$feedback['User_ID']}\"><button name='delete' class=\"delete\" disabled>Delete</button></td>";
                $feedback_array .= "</tr>";
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
    <title>Feed Back Management</title>
    <link rel="stylesheet" href="./styles/feedbacktable.css">
    <style>

        body {
            background-color: #f0f8ff; /* Light background for better contrast */
            font-family: Arial, sans-serif; /* Cleaner font */
            color: #333; /* Darker text color for readability */
            margin: 0; /* Remove default margin */
        }

        .main_txt {
            text-align: center; /* Center the header */
            margin-top: 40px; /* Add some margin around the header */
            margin-bottom: 10px;
            margin-block: 0;
            font-size: 2.5em; /* Larger font size for emphasis */
            color: #2c3e50; /* Dark color for the header */
        }

        table {
            margin: 20px auto; /* Center the table */
            width: 80%; /* Set a width for the table */
            border-collapse: collapse; /* Combine border styling */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        th {
            background-color: #3498db; /* Blue background for headers */
            color: white; /* White text for contrast */
            padding: 12px; /* More padding for a modern look */
            text-align: left; /* Left-align the text in headers */
        }

        td {
            padding: 12px; /* Consistent padding for table cells */
            border: 1px solid #ddd; /* Light border for cells */
            text-align: center; /* Center the text in cells */
            transition: background-color 0.3s; /* Smooth transition on hover */
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Light grey for even rows */
        }

        tr:nth-child(odd) {
            background-color: #ffffff; /* White for odd rows */
        }

        tr:hover {
            background-color: #f1c40f; /* Highlight row on hover */
        }

        .update, .delete {
            text-decoration: none; /* Remove underline from links */
            color: white; /* White text */
            padding: 8px 15px; /* Consistent padding for buttons */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition for background color */
            border: none;
            cursor: pointer;
        }

        .update:disabled, .delete:disabled {
            background-color: #a1a1a1;
        }
        .update:disabled:hover, .delete:disabled:hover {
            background-color: #a1a1a1;
            cursor: not-allowed;
        }
        
        .update {
            background-color: #8e44ad; /* Purple background for update buttons */
        }
        
        .delete {
            background-color: #e74c3c; /* Red background for delete buttons */
        }

        .update:hover {
            background-color: #732d91;
        }

        .delete:hover {
            background-color: #c0392b; 
        }


    </style>
</head>
<body>
    

    <!-- table starts here  -->
    <h1 class="main_txt">Feed Back</h1>

    <table class="user_list">
        <tr>
            <th>Feedback ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Content</th>
            <th>Published Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php echo $feedback_array; ?>;
    </table>

    <?php require_once('./footer.php') ?>
</body>
</html>