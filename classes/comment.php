<?php

class Comment {
    public $id;
    public $author;
    public $text;
    public $post_id;

    function __construct($post_id, $author, $text, $id){
        $this->id = $id;
        $this->author = $author;
        $this->text = $text;
        $this->post_id = $post_id;
    }

    public function print(){
        echo "<li>
            <h6>{$this->author}</h6>
            <p>{$this->text}</p>
            <form method=\"POST\" action=\"delete-comment.php\" >
                <button id=\"delete\" class=\"btn btn-default\">Delete</button>
                <input type=\"hidden\" value=\"{$this->id}\" name=\"id\"/>
                <input type=\"hidden\" value=\"{$this->post_id}\" name=\"post_id\"/>
            </form>
        </li>
        <hr>";
    }
}

?>