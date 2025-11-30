<?php require_once('./header.php');
require_once('./connection.php'); ?>
<?php 

    $insertok = $_GET['insert'];

    if (isset($_GET['insert']) && $insertok == 'true') {
        echo '<script>setTimeout(function() { alert("FAQ Successfully Added");}, 1000); </script>';
    }

    if(!isset($_SESSION['userid'])) {
        header('Location:./login_page.php');
    }
?>
<?php
//initialize data user variable
    $inq_array = '';

    //fetch user variable
    $userid = $_SESSION['userid'];

    $sql_query = "SELECT * FROM inquiries WHERE User_ID = '$userid' ORDER BY Inquiry_ID";
    $inquiries = mysqli_query($conn, $sql_query);
    //if query execute sucssfully
    if ($inquiries) {
        while ($inquiry = mysqli_fetch_assoc($inquiries)) {
            $inq_array .= "<tr>";
            $inq_array .= "<td> {$inquiry['Inquiry_ID']} </td>";
            $inq_array .= "<td> {$inquiry['Username']} </td>";
            $inq_array .= "<td> {$inquiry['Name']} </td>";
            $inq_array .= "<td> {$inquiry['Email']} </td>";
            $inq_array .= "<td> {$inquiry['Contact_No']} </td>";
            $inq_array .= "<td> {$inquiry['Inquiry_Type']} </td>";
            $inq_array .= "<td> {$inquiry['Subject']} </td>";
            $inq_array .= "<td> {$inquiry['Description']} </td>";

            $inq_array .= "<td> <a href=\"updateInq.php?userId={$inquiry['User_ID']}&inqId={$inquiry['Inquiry_ID']}\" class=\"update\"><button name='update' class=\"update\">Update</button></td>"; 
            
            $inq_array .= "<td> <a href=\"deleteInquiry.php?userId={$inquiry['User_ID']}&inqId={$inquiry['Inquiry_ID']}\" class=\"delete\"><button name='delete' class=\"delete\">Delete</button></td>";
            $inq_array .= "</tr>";
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
    <title>Inquiry Management</title>
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
            text-align: center; /* Left-align the text in headers */
            max-width: 220px;
            text-wrap: wrap;
            text-overflow: ellipsis;
        }
        
        td {
            padding: 12px; /* Consistent padding for table cells */
            border: 1px solid #ddd; /* Light border for cells */
            text-align: center; /* Center the text in cells */
            transition: background-color 0.3s; /* Smooth transition on hover */
            max-width: 220px;
            text-wrap: wrap;
            text-overflow: ellipsis;
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
        }
        
        .update {
            background-color: #8e44ad; /* Purple background for update buttons */
        }
        
        .delete {
            background-color: #e74c3c; /* Red background for delete buttons */
        }

        .update:hover {
            background-color: #732d91; /* Darker purple on hover */
        }

        .delete:hover {
            background-color: #c0392b; /* Darker red on hover */
        }


    </style>
</head>
<body>
    

    <!-- table starts here  -->
    <h1 class="main_txt">Inquiries</h1>

    <table class="user_list">
        <tr>
            <th>Inquiry ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact_No</th>
            <th>Inquiry_Type</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php echo $inq_array; ?>;
    </table>

    <?php require_once('./footer.php') ?>
</body>
</html>