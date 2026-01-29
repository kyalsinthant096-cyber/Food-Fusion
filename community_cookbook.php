<?php
include("DatabaseConnection.php");

// Handle Like submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_ip = $_SERVER['REMOTE_ADDR'] ?? '';
    if (isset($_POST['like_id'])) {
        $cookbook_id = (int)$_POST['like_id'];
        $stmt = $connection->prepare("INSERT IGNORE INTO cookbook_likes (cookbook_id, user_ip) VALUES (?, ?)");
        $stmt->bind_param("is", $cookbook_id, $user_ip);
        $stmt->execute();
        $stmt->close();
    }
    if (isset($_POST['comment_id'], $_POST['comment_text'])) {
        $cookbook_id = (int)$_POST['comment_id'];
        $comment = trim($_POST['comment_text']);
        if ($comment !== '') {
            $stmt = $connection->prepare("INSERT INTO cookbook_comments (cookbook_id, comment, user_ip) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $cookbook_id, $comment, $user_ip);
            $stmt->execute();
            $stmt->close();
        }
    }
    header("Location: community_cookbook.php");
    exit;
}

$cookbooks = $connection->query("SELECT * FROM community_cookbook ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Community Cookbook</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to right, #fcd34d, #fff);
  padding: 20px;
  margin: auto;
}
h1 {
  text-align: center;
  margin-bottom: 20px;
}
.create-btn {
  display: inline-block;
  margin-bottom: 20px;
  padding: 10px 20px;
  background-color: #f59e0b;
  color: white;
  text-decoration: none;
  font-weight: bold;
  border-radius: 6px;
}
.cards {
  display: flex;
  flex-direction: column;
  gap: 30px;
}
.card {
  background: white;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 0 12px #bbb;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  align-items: flex-start;
}
.card-text {
  flex: 1 1 300px;
  display: flex;
  flex-direction: column;
}
.card img {
  width: 100%;
  max-width: 350px;
  height: auto;
  object-fit: cover;
  border-radius: 5px;
  flex-shrink: 0;
}
.like-btn {
  background: #f59e0b;
  border: none;
  color: white;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
  align-self: flex-start;
}
.comment-section {
  margin-top: 10px;
  max-height: 150px;
  overflow-y: auto;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 8px;
  background: #fafafa;
}
.comment-form textarea {
  width: 100%;
  height: 50px;
  resize: none;
  border-radius: 4px;
  border: 1px solid #ccc;
  padding: 5px;
  font-family: Arial, sans-serif;
}
.comment-form button {
  margin-top: 5px;
  background: #10b981;
  border: none;
  color: white;
  padding: 6px 12px;
  border-radius: 5px;
  cursor: pointer;
  align-self: flex-end;
}
.comments-list {
  margin-top: 10px;
  font-size: 14px;
}
.comment-item {
  margin-bottom: 5px;
  border-bottom: 1px dotted #ccc;
  padding-bottom: 3px;
}

/* Responsive styles */
@media (max-width: 768px) {
  .card {
    flex-direction: column;
    align-items: stretch;
    padding: 15px;
  }

  .card img {
    width: 100%;
    height: auto;
  }

  .create-btn {
    width: 100%;
    text-align: center;
    font-size: 16px;
  }

  body {
    padding: 10px;
  }
}
</style>
</head>
<body>

<?php include 'Navigation.php'; ?>
<br>

<h1>Community Cookbook</h1>

<a href="create_cookbook.php" class="create-btn">+ Create New Cookbook Card</a>

<div class="cards">
<?php while ($row = $cookbooks->fetch_assoc()): ?>
  <div class="card">
    <div class="card-text">
      <h3><?= htmlspecialchars($row['title']) ?></h3>
      <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>

      <?php
      $stmt = $connection->prepare("SELECT COUNT(*) FROM cookbook_likes WHERE cookbook_id = ?");
      $stmt->bind_param("i", $row['id']);
      $stmt->execute();
      $stmt->bind_result($likes_count);
      $stmt->fetch();
      $stmt->close();

      $stmt = $connection->prepare("SELECT comment, created_at FROM cookbook_comments WHERE cookbook_id = ? ORDER BY created_at DESC");
      $stmt->bind_param("i", $row['id']);
      $stmt->execute();
      $comments_result = $stmt->get_result();
      ?>

      <form method="POST" style="margin-top: 10px;">
        <input type="hidden" name="like_id" value="<?= $row['id'] ?>" />
        <button type="submit" class="like-btn">👍 Like (<?= $likes_count ?>)</button>
      </form>

      <div class="comment-section">
        <form method="POST" class="comment-form">
          <input type="hidden" name="comment_id" value="<?= $row['id'] ?>" />
          <textarea name="comment_text" placeholder="Add a comment..." required></textarea>
          <button type="submit">Comment</button>
        </form>

        <div class="comments-list">
          <?php if ($comments_result->num_rows > 0): ?>
            <?php while ($comment = $comments_result->fetch_assoc()): ?>
              <div class="comment-item"><?= htmlspecialchars($comment['comment']) ?><br><small><?= $comment['created_at'] ?></small></div>
            <?php endwhile; ?>
          <?php else: ?>
            <small>No comments yet.</small>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if ($row['photo']): ?>
      <img src="uploads/<?= htmlspecialchars($row['photo']) ?>" alt="Photo" />
    <?php else: ?>
      <img src="https://via.placeholder.com/350x250?text=No+Image" alt="No Image" />
    <?php endif; ?>
  </div>
<?php endwhile; ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
