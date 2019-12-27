<form method="POST" action="create-comment.php" >
    
    <input id="author" name="author" type="text" placeholder="Author" style="display:block; margin-bottom:1.2rem; padding:0.8rem"/>
    <textarea id="comment" name="comment" rows="10" cols="100" placeholder="Comment" style="display:block; margin-bottom:1.5rem; max-width: 600px;"></textarea>
    <input type="hidden" value="<?php echo $_GET['post_id'] ?>" name="post_id"/>
    <input class="btn btn-default" type="submit" value="Submit comment">

</form>
<br>