<?php

class Post {
    public $id;
    public $author;
    public $title;
    public $body;
    public $created_at;

    function __construct($author, $title, $body, $id, $created_at) {
        $this->author = $author;
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
        $this->created_at = $created_at;
    }

    public function print() {
        echo "
            <div class=\"blog-post\">
                <a href= \"single-post.php?post_id={$this->id}\"><h2 class=\"blog-post-title\">{$this->title}</h2></a>
                <p class=\"blog-post-meta\">{$this->created_at} by <a href=\"#\">{$this->author}</a></p>

                {$this->body}
            </div><!-- /.blog-post -->
        ";
    }
}
?>