<?php
/**
 * Created by PhpStorm.
 * User: durjoy
 * Date: 20-Feb-17
 * Time: 12:46 AM
 */

namespace App\Recieptionist;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;

class Recieptionist extends DB
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $address;
    private $phone;
    private $filename;
    private $tempLocation;
    private $error;


    public function setData($postdata=null){

        if(array_key_exists('id', $postdata)){
            $this->id=$postdata['id'];
        }
        if(array_key_exists('name', $postdata)){
            $this->name=$postdata['name'];
        }
        if(array_key_exists('email', $postdata)){
            $this->email=$postdata['email'];
        }
        if(array_key_exists('password', $postdata)){
            $this->password=md5($postdata['password']);
        }
        if(array_key_exists('address', $postdata)){
            $this->address=$postdata['address'];
        }
        if(array_key_exists('phone', $postdata)){
            $this->phone=$postdata['phone'];
        }
    }
    public function setPropic($fileData=null){
        if(array_key_exists("image",$fileData)){


            $this->filename = $fileData['image']['name'];
            $this->tempLocation = $fileData['image']['tmp_name'];
            $src = "../images/".$this->filename;
            $this->success = move_uploaded_file($this->tempLocation, $src);
            $this->error = $fileData['image']['error'];
        }

    }



    public function store() {


        $dataArray= array(':name'=>$this->name,':email'=>$this->email,':password'=>$this->password,':address'=>$this->address, ':phone'=>$this->phone, ':propic'=>$this->filename);


        $query="INSERT INTO `hms_sirius`.`receptionist` (`name`, `email`, `password`, address, phone, propic) VALUES (:name, :email, :password,:address, :phone, :propic)";

        $STH=$this->DBH->prepare($query);

        $result = $STH->execute($dataArray);

        if ($result) {
            Message::message("
                <div class=\"alert alert-success\">
                            <strong>Success!</strong> Data has been stored successfully, Please check your email and active your account.
                </div>");
            Utility::redirect($_SERVER['HTTP_REFERER']);
        } else {
            Message::message("
                <div class=\"alert alert-danger\">
                            <strong>Failed!</strong> Data has not been stored successfully.
                </div>");
            Utility::redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function change_password(){
        $query="UPDATE `hms_sirius`.`receptionist` SET `password`=:password  WHERE `receptionist`.`email` =:email";
        $result=$this->DBH->prepare($query);
        $result->execute(array(':password'=>$this->password,':email'=>$this->email));

        if($result){
            Message::message("
             <div class=\"alert alert-info\">
             <strong>Success!</strong> Password has been updated  successfully.
              </div>");
        }
        else {
            echo "Error";
        }

    }

    public function view(){
        $query=" SELECT * FROM receptionist WHERE email = '$this->email' ";
        // Utility::dd($query);
        $STH =$this->DBH->query($query);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetch();

    }// end of view()

    /*
        public function validTokenUpdate(){
            $query="UPDATE `hms_sirius`.`receptionist` SET  `email_verified`='".'Yes'."' WHERE `users`.`email` ='$this->email'";
            $result=$this->DBH->prepare($query);
            $result->execute();

            if($result){
                Message::message("
                 <div class=\"alert alert-success\">
                 <strong>Success!</strong> Email verification has been successful. Please login now!
                  </div>");
            }
            else {
                echo "Error";
            }
            return Utility::redirect('../../../../views/SEIPXXXX/User/Profile/signup.php');
        }
    */
    public function update(){

        $query="UPDATE `hms_sirius`.`receptionist` SET `email` =:email, `phone` = :phone, `address` = :address  WHERE `users`.`email` = :email";

        $result=$this->DBH->prepare($query);

        $result->execute(array(':email'=>$this->email,':phone'=>$this->phone, ':address'=>$this->address));

        if($result){
            Message::message("
             <div class=\"alert alert-info\">
             <strong>Success!</strong> Data has been updated  successfully.
              </div>");
        }
        else {
            echo "Error";
        }
        Utility::redirect($_SERVER['HTTP_REFERER']);
    }

}