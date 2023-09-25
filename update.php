<?php 
require_once 'bootstrap.php';

$post_id = $_GET['id'];
$post = Post::getOne($post_id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postId = $_POST['post_id']; // Assuming you have a hidden input field for post_id.
    $title = $_POST['title'];
    $body = $_POST['body'];

    $result = Post::updatePost($postId, $title, $body);

    if ($result === false) {
        // Handle the update error, for example:
        echo "Error updating the post.";
    } elseif ($result === 0) {
        // No rows were affected; the post with the given ID may not exist.
        echo "Post not found or not updated.";
    } else {
        // Update successful; redirect to the post's detail page.
        header("Location: post.php?id={$postId}");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post <?=$post_id?></title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Update Post</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="<?= $post->title ?>" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5"  required><?= $post->body ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
