<?php
header('Access-Control-Allow-Origin:*'); // * OR https://www.reddit.com/
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: *"); // TODO: POST,GET,DELETE,PUT
header("Access-Control-Allow-Headers:*");
require "../modal/Methods.php";
    class Controller{
    
        public function categories()
        {
            $cats = new Methodes();
            $json= json_encode($cats->getCat());
            echo $json;
        }
        public function addCat($name)
        {
            $cats = new Methodes();
            $json= json_encode($cats->addCat($name));
            echo $json;
        }
    }