<?php
    /**
     * Connect to database
     */
    function db() {
        return new mysqli('localhost','root','','php_project');
    }
    /**
    * Get all data from table travels
    */
    function getAlldata(){
        return db()->query("SELECT * FROM categories INNER JOIN travels ON categories.categoryID = travels.categoryID");
    }
    /**
    * Get all data from table travels
    */
    function getAllcate(){
        return db()->query("SELECT * FROM categories");
    }
    /**
    * Get only one on record by id 
    */
    function getOnedata($id){
        return db()->query("SELECT * FROM travels WHERE travelID = $id");
    }
    /**
    * create new record
    */
    function createPlaces($value){
        $places = $value['places'];
        $desc = $value['description'];

        $fileName=$_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType =$_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $dir = "../assets/images/";
        move_uploaded_file($tmp_name,$dir.$fileName);

        $date=$value['date'];
        // $img = $value['image'];
        $categoryID = "1";
        if ($places !="" && $desc && $fileName !="" && $date !=""){
            db()->query("INSERT INTO travels(places,description,image,categoryID,date) VALUE('$places','$desc','$fileName','$categoryID','$date')");
            header("Location:http://localhost/basic_php/?page=places");
        }else{
            header("Location:http://localhost/basic_php/?page=home");
        }
       
    }
    /**
    * delete record
    */
    function deletePlaces($id){
        db()->query("DELETE FROM travels WHERE travelID = $id");
        header('Location:http://localhost/basic_php/?page=places');
        
    }
    /**
     * Update places
     */
    function updatePlaces($value) {
        $places = $value['places'];
        $desc = $value['description'];
        $img = $value['image'];
        $date=$value['date'];
        $id = $value['placeID'];
        db()->query("UPDATE travels SET places = '$places' ,description = '$desc',  image = '$img', date='$date'  WHERE travelID = $id");
        header('Location:http://localhost/basic_php/?page=places');
    }
    /**
     * search places
     */
    function searchByPlaces($places){
        $places = $places['search'];
        return db()->query("SELECT*FROM travels INNER JOIN categories ON travels.categoryID = categories.categoryID AND places LIKE '%$places%'");
    }
    /**
     * read more detail
     */
    function readMore($text,$number){
        return substr($text,0,$number);
    }
    /**
     * login user
     */
    function login($value){
        $admin = $value['userName'];
        $email = $value['email'];
        $phone = $value['phone'];
        $password = $value['password'];
        $login = false;
        $getUser = db()->query("SELECT * FROM users");
        foreach ($getUser as $user){
            if ($user["email"] == $email && $user["password"] == $password){
                $login = true;
            }
        } return $login;
    }    