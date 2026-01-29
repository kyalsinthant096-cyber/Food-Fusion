<?php include("DatabaseConnection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback Messages</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffef5;
            padding: 30px;
        }
        h2 {
            color: #e67e22;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #fcd34d;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f6d365;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #fff9c4;
        }
        .delete-link {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }
        .delete-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
        <?php include 'admin_panel.php'?>
        <br><br>
    <h2>Feedback Messages</h2>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Sent At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM feedback ORDER BY created_at DESC";
            $result = mysqli_query($connection, $sql);
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $count++ . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>
                        <a href='delete_feedback.php?id=" . $row['id'] . "' 
                           class='delete-link' 
                           onclick=\"return confirm('Are you sure you want to delete this message?');\">
                           Delete
                        </a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
     
</body>
</html>
