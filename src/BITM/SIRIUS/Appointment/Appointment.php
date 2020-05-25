<?php

namespace App\Appointment;

use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
use PDO;

class Appointment extends DB
{
    private $id;
    private $depts;
    private $fname;
    private $lastname;
    private $num;
    private $emails;
    private $dates;
    private $hours;
    private $time;
    private $success;
    private $error;


    public function setData($postdata=null){

        if(array_key_exists('id', $postdata)){
            $this->id=$postdata['id'];
        }
        if(array_key_exists('depts', $postdata)){
            $this->depts=$postdata['depts'];
        }
        if(array_key_exists('fname', $postdata)){
            $this->fname=$postdata['fname'];
        }
        if(array_key_exists('lastname', $postdata)){
            $this->lastname=$postdata['lastname'];
        }
        if(array_key_exists('num', $postdata)){
            $this->num=$postdata['num'];
        }
        if(array_key_exists('emails', $postdata)){
            $this->emails=$postdata['emails'];
        }
        if(array_key_exists('dates', $postdata)){
            $this->dates=$postdata['dates'];
        }
        if(array_key_exists('hours', $postdata)){
            $this->hours=$postdata['hours'];
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


        $dataArray= array(':depts'=>$this->depts,':fname'=>$this->fname,':lastname'=>$this->lastname, ':num'=>$this->num, ':emails'=>$this->emails, ':dates'=>$this->dates, ':hours'=>$this->hours);


        $query="INSERT INTO `hms_sirius`.`appointment` (`depts`, `fname`, `lastname`,  `num`, `emails`, `dates`, hours) VALUES (:depts, :fname, :lastname, :num, :emails, :dates, :hours)";

        $STH=$this->DBH->prepare($query);

        $result = $STH->execute($dataArray);

        if ($result) {
            Message::message("
                <div class=\"alert alert-success\">
                            <strong>Success!</strong> Data has been stored successfully, Please check your emails and active your account.
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

    public function search($requestArray){
        $sql = "";
        if( isset($requestArray['depts']) && isset($requestArray['dates']) )  $sql = "SELECT * FROM `appointment` WHERE `soft_delete` ='No' AND (`depts` LIKE '%".$requestArray['depts']."%' OR `dates` LIKE '%".$requestArray['search']."%')";
        if(isset($requestArray['depts']) && !isset($requestArray['dates']) ) $sql = "SELECT * FROM `appointment` WHERE `soft_delete` ='No' AND `depts` LIKE '%".$requestArray['depts']."%'";
        if(!isset($requestArray['depts']) && isset($requestArray['dates']) )  $sql = "SELECT * FROM `appointment` WHERE `soft_delete` ='No' AND `dates` LIKE '%".$requestArray['dates']."%'";

        $STH  = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();

        return $someData;

    }// end of search()




    public function view(){
        $time = date('d/m/Y');
        $query=" SELECT * FROM appointment WHERE dates ='$time'";
        // Utility::dd($query);
        $STH =$this->DBH->query($query);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetchAll();

    }// end of view()

    /*
        public function validTokenUpdate(){
            $query="UPDATE `hms_sirius`.`appointment` SET  `emails_verified`='".'Yes'."' WHERE `users`.`emails` ='$this->emails'";
            $result=$this->DBH->prepare($query);
            $result->execute();

            if($result){
                Message::message("
                 <div class=\"alert alert-success\">
                 <strong>Success!</strong> emails verification has been successful. Please login now!
                  </div>");
            }
            else {
                echo "Error";
            }
            return Utility::redirect('../../../../views/SEIPXXXX/User/Profile/signup.php');
        }
    */
    public function update(){

        $query="UPDATE `hms_sirius`.`appointment` SET `emails` =:emails, `num` = :num, `address` = :address  WHERE `users`.`emails` = :emails";

        $result=$this->DBH->prepare($query);

        $result->execute(array(':emails'=>$this->emails,':num'=>$this->num, ':address'=>$this->address));

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


    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();

        $allData = $this->view();

        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->depts);
        }

        $allData = $this->view();


        foreach ($allData as $oneData) {

            $eachString= strip_tags($oneData->depts);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);

            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end




        // for each search field block start
        $allData = $this->view();

        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->dates);
        }
        $allData = $this->view();

        foreach ($allData as $oneData) {

            $eachString= strip_tags($oneData->dates);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);
            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end


        return array_unique($_allKeywords);


    }// get all keywords
}