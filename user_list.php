<?php
include("DatabaseConnection.php");

$sql = "SELECT * FROM registertable";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: #fffef2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        .user-table th, .user-table td {
            border: 1px solid #e0e0e0;
            padding: 12px;
            text-align: center;
        }

        .user-table th {
            background-color: #fcd34d;
            color: #000;
        }

        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .action-btn {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .action-btn a {
            background: #facc15;
            color: #000;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        .action-btn a:hover {
            background: #fbbf24;
        }

        @media (max-width: 768px) {
            .user-table thead {
                display: none;
            }

            .user-table, .user-table tbody, .user-table tr, .user-table td {
                display: block;
                width: 100%;
            }

            .user-table tr {
                margin-bottom: 20px;
                border-bottom: 2px solid #fcd34d;
                padding-bottom: 10px;
            }

            .user-table td {
                text-align: left;
                padding-left: 50%;
                position: relative;
            }

            .user-table td::before {
                position: absolute;
                left: 15px;
                top: 12px;
                width: 45%;
                white-space: nowrap;
                font-weight: bold;
                color: #555;
            }

            .user-table td:nth-of-type(1)::before { content: "ID"; }
            .user-table td:nth-of-type(2)::before { content: "First Name"; }
            .user-table td:nth-of-type(3)::before { content: "Last Name"; }
            .user-table td:nth-of-type(4)::before { content: "Email"; }
            .user-table td:nth-of-type(5)::before { content: "Username"; }
            .user-table td:nth-of-type(6)::before { content: "Country"; }
            .user-table td:nth-of-type(7)::before { content: "Profile"; }
            .user-table td:nth-of-type(8)::before { content: "Actions"; }
        }
    </style>
</head>
<body>
        <?php include 'admin_panel.php' ?>
<h1>Registered Users</h1>

<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Country</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $user["id"]; ?></td>
            <td><?php echo $user["fname"]; ?></td>
            <td><?php echo $user["lname"]; ?></td>
            <td><?php echo $user["email"]; ?></td>
            <td><?php echo $user["username"]; ?></td>
            <td><?php echo $user["country"]; ?></td>
            <td>
                <?php if (!empty($user["profile"])): ?>
                    <img class="profile-img" src="image/<?php echo $user["profile"]; ?>" alt="Profile">
                <?php else: ?>
                    N/A
                <?php endif; ?>
            </td>
            <td class="action-btn">
                <a href='edit_userlist.php?id=<?php echo $user["id"]; ?>'>Edit Fusion</a>
                <a href='delete_user.php?id=<?php echo $user["id"]; ?>' onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
