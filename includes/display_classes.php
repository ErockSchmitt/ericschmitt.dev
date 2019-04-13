<?php 
    include("../mysqli_connect.php");

    $query = 'SELECT name, description FROM class';
    

    if($result = mysqli_query($connect, $query));
    {
        while($row = mysqli_fetch_array($result))
        {
            echo 
                "<div class=\"col-sm-12 col-md-6 col-lg-4 mb-4\">
                    <div class=\"class_body col-12 border rounded text-wrap py-2\">
                    <h5 class=\"class_title \">{$row['name']}</h5>
                    <hr>
                    <p class=\"class_description\">{$row['description']}</p>
                    <a href=\"#\" class=\"card-link\">Read More</a><br>
                    <a href=\"#\" class=\"card-link\">Create A {$row['name']}</a>
                    </div>
                </div>";
        }
    }
?>