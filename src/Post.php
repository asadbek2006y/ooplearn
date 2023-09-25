<?php 

class Post 
{
    public static $pdo;
    public $id;
    public $title;
    public $body;
    public $created_at;

    public static function getAll()
    {
        // select a particular posts
        $stmt = self::$pdo->prepare("SELECT * FROM posts ");
        $stmt->execute(); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post'); 
        $posts = $stmt->fetchAll();  
         
        return $posts;
    }

    public static function getOne($id)
    {
        // select a particular user by id
        //  $stmt->execute([$id]); change 1
        // $posts = $stmt->fetch();  change 2

        $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post'); 
        $posts = $stmt->fetch();  
         
        return $posts;
    }
    public static function createPost($title, $body)
    {
        // Assuming you have a PDO connection established, let's call it $pdo.
        // Make sure to replace 'users' with the actual table name.
        $stmt = self::$pdo->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
        // Prepare the SQL statement.
        // Bind parameters.
        $stmt->execute([
            'title' => $title,
            'body' => $body,
        ]);
        $row = $stmt->rowCount();
        return $row;
    }
    public static function updatePost($postId, $title, $body)
    {
        // Assuming you have a PDO connection established, let's call it $pdo.
        // Make sure to replace 'posts' with the actual table name.
        $stmt = self::$pdo->prepare("UPDATE posts SET title = :title, body = :body WHERE id = :postId");
        
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    
        $stmt->execute();
    
        $row = $stmt->rowCount();
        return $row;
    }
    
}