<?php
include("DatabaseConnection.php");

// Handle deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = (int)$_POST['delete_id'];

    // Delete photo file if exists
    $get = $connection->prepare("SELECT photo FROM community_cookbook WHERE id=?");
    $get->bind_param("i", $delete_id);
    $get->execute();
    $get->bind_result($photo);
    if ($get->fetch() && $photo && file_exists("uploads/$photo")) {
        unlink("uploads/$photo");
    }
    $get->close();

    // Delete row
    $del = $connection->prepare("DELETE FROM community_cookbook WHERE id=?");
    $del->bind_param("i", $delete_id);
    $del->execute();
    $del->close();

    header("Location: cookbook_list.php");
    exit;
}

// Fetch all cookbooks
$result = $connection->query("SELECT * FROM community_cookbook ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin - Cookbook List</title>
<style>
  body { background: linear-gradient(to right, #fcd34d, #fff); font-family: Arial; padding: 20px; }
  h1 { text-align: center; margin-bottom: 20px;}
  table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    box-shadow: 0 0 8px #ccc;
  }
  th, td {
    padding: 10px;
    border: 1px solid #ddd;
    vertical-align: top;
  }
  th {
    background-color: #facc15;
    color: black;
    text-align: left;
  }
  img {
    width: 120px;
    height: auto;
    border-radius: 5px;
  }
  .comments-list {
    max-height: 150px;
    overflow-y: auto;
    border: 1px solid #ddd;
    padding: 8px;
    background: #fafafa;
    border-radius: 4px;
    font-size: 14px;
  }
  .comment-item {
    margin-bottom: 6px;
    border-bottom: 1px dotted #ccc;
    padding-bottom: 4px;
  }
  .delete-btn {
    background: #dc2626;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
   <!-- Admin Navigation -->
      <?php include 'admin_panel.php' ?>


      <br>


<h1>Admin Panel: Community Cookbook</h1>

<table>
  <tr>
    <th>Title</th>
    <th>Photo</th>
    <th>Comments</th>
    <th>Delete</th>
  </tr>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($row['title']) ?></td>
      <td>
        <?php if ($row['photo']): ?>
          <img src="uploads/<?= htmlspecialchars($row['photo']) ?>" alt="Photo">
        <?php else: ?>
          No image
        <?php endif; ?>
      </td>
      <td>
        <?php
        // Fetch comments for this cookbook
        $stmt = $connection->prepare("SELECT comment, created_at FROM cookbook_comments WHERE cookbook_id = ? ORDER BY created_at DESC");
        $stmt->bind_param("i", $row['id']);
        $stmt->execute();
        $comments_result = $stmt->get_result();

        if ($comments_result->num_rows > 0):
        ?>
        <div class="comments-list">
          <?php while ($comment = $comments_result->fetch_assoc()): ?>
            <div class="comment-item">
              <?= htmlspecialchars($comment['comment']) ?><br>
              <small><?= $comment['created_at'] ?></small>
            </div>
          <?php endwhile; ?>
        </div>
        <?php else: ?>
          No comments
        <?php endif; ?>
        <?php $stmt->close(); ?>
      </td>
      <td>
        <form method="POST" onsubmit="return confirm('Are you sure to delete?');">
          <input type="hidden" name="delete_id" value="<?= $row['id'] ?>">
          <button type="submit" class="delete-btn">Delete</button>
        </form>
      </td>
    </tr>
  <?php endwhile; ?>
  
</table>
<br>


</body>
</html>
