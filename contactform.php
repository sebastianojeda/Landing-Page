<?php
    require_once(__DIR__ . "../model/config.php");
?>



        <!--This php code is taking me to my create-post.php 
            file so that when i submit something on my blog that 
            submition is stored in my create-post.php file-->
<form class="content" method="post" action="<?php echo $path . "controller/create-post.php";?>">
    <div>
        <label for="first">First:</label>
        <input  type="text" name="first"/>
    </div>
    <div>
        <label for="last">Last:</label>
        <input  type="text" name="last"/>
    </div>
    <div>
        <label for="eamil">Email:</label>
       <input  type="text" name="email"/>
    </div>
    <div>
        <label for="post">Message:</label>
        <input  type="text" name="post"/>
    </div>
     <!--This line of code allows us to submit code-->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>