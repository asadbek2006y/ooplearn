<?php
require_once 'bootstrap.php';

// Retrieve blog posts
$posts = Post::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Blog</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">OOP Blog</h1>
        <a href="create.php" class="btn btn-primary mb-4">Create Post</a>
        
        <ul class="list-group">
            <?php foreach($posts as $post) : ?>
            <li class="list-group-item">
                <h3>
                    <a href="post.php?id=<?= $post->id?>" class="text-primary"><?=  $post->id. " - " .$post->title  ?></a>
                </h3>
                <p><?= $post->body  ?></p>
                <a href="update.php?id=<?= $post->id?>" class="btn btn-primary">Edit</a>
            </li>
            <?php endforeach; ?>
            
        </ul>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
