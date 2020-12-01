<?php include 'header.php';?>
      
      <div class="main">
        <h2 class="createTopic">Create New Post</h2>

       <form action="all.php" method="post">
           <label for="post title">Post title</label><br>
            <input type="text" placeholder="Post title..."><br>
            <label for="post title">Post Details</label><br>
            <textarea id="w3review" name="w3review" rows="4" cols="50"  placeholder="Type here..."></textarea><br>
            <label for="post title">Post tags</label><br> 
            <input type="text" placeholder="Tags..."><br>
            <label for="img">Select image:</label>
            <input type="file" id="img" name="img" accept="image/*"><br>
 

            <button type="submit" value="Submit" class="submit">Submit now</button><br>    
        </form>
      </div>



<?php include 'footer.php';?>