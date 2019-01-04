<?php
    include "header.php";    
?>

<h2>Article Page</h2>

<div class="article-container">
    <?php
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "SELECT * FROM article WHERE title='$title' AND date='$date' ";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while($row =  mysqli_fetch_assoc($result)){
                echo "<div class='article-box'>
                        <h3>".$row['title']."</h3> 
                        <p>".$row['text']."</p>
                        <p>".$row['date']."</p>
                        <p>".$row['author']."</p>
                    </div>";
            }
        }
 ?>
</div>
</body>
</html>