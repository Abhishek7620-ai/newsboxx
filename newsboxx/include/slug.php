 <?php
                include "include/db.php";
                $u_id = $_GET['/id'];
                $query = "select * from `upcoming-device` WHERE u_id = '{$u_id}'";
                $data = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($data))
                {
                    $image = $row['image'];
                    $heading = $row['heading'];
                    $slug = $row['slug'];
                    $news = $row['news'];
                    $category = $row['category'];
                    $tag = $row['tag'];
                    $date = $row['date'];
                    $author = $row['author'];
                    $views = $row['views'];
                }
                $query="UPDATE `upcoming-device`  SET `views`=`views`+ 1 WHERE `upcoming-device`.u_id = '{$u_id}' "; 
                $data = mysqli_query($con,$query);
                ?>