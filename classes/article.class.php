<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/23/2016
 * Time: 3:06 PM
 */
include_once("db.class.php");
class article {

    private $m_sCategory;
    private $m_sTime;
    private $m_sPhotoArticle;
    private $m_sIntro;
    private $m_sArticleId;
  //  private $m_sFk_user_id;
    private $m_sParagraph;
    private $m_sTitle;
    private $m_sPhotoName;
  //  private $m_sPhotoSize;
    private $m_sPhotoNameT;
    private $m_sUpvotes;

    // SETTER
        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty) {
                case "Category":
                    $this->m_sCategory = $p_vValue;
                    break;
                case "pTime":
                    $this->m_sTime = $p_vValue;
                    break;
                case "PhotoArticle":
                    $this->m_sPhotoArticle = $p_vValue;
                    break;
                case "Intro":
                    $this->m_sIntro = $p_vValue;
                    break;
                case "ArticleId":
                    $this->m_sArticleId = $p_vValue;
                    break;
              //  case "Fk_user_id":
               //     $this->m_sFk_user_id = $p_vValue;
               //     break;
                case "Paragraph":
                    $this->m_sParagraph = $p_vValue;
                    break;
                case "Title":
                    $this->m_sTitle = $p_vValue;
                    break;
                case "PhotoName":
                    $this->m_sPhotoName = $p_vValue;
                    break;
           //     case "PhotoSize":
           //         $this->m_sPhotoSize = $p_vValue;
          //          break;
                case "PhotoNameT":
                    $this->m_sPhotoNameT = $p_vValue;
                    break;
                /*case "Upvotes":
                    $this->m_sUpvotes = $p_vValue;
                    break;*/
            }
        }
    // GETTER
        public function __get($p_sProperty)
         {
             $vResult = null;
                switch ($p_sProperty) {
                    case "Category":
                         $vResult = $this->m_sCategory;
                         break;
                    case "pTime":
                        $vResult = $this->m_sTime;
                        break;
                    case "PhotoArticle":
                        $vResult = $this->m_sPhotoArticle;
                        break;
                    case "Intro":
                        $vResult = $this->m_sIntro;
                        break;
                    case "ArticleId":
                        $vResult = $this->m_sArticleId;
                        break;
                 //   case "Fk_user_id":
                  //      $vResult = $this->m_sFk_user_id;
                 //       break;
                    case "Paragraph":
                        $vResult = $this->m_sParagraph;
                        break;
                    case "Title":
                        $vResult = $this->m_sTitle;
                        break;
                    case "PhotoName":
                        $vResult =  $this->m_sPhotoName;
                        break;
               //     case "PhotoSize":
             //           $vResult = $this->m_sPhotoSize;
            //            break;
                    case "PhotoNameT":
                        $vResult = $this->m_sPhotoNameT ;
                        break;
                    case "Upvotes":
                        $vResult = $this->m_sUpvotes;
                        break;
                    }
                    return $vResult;
         }
    public function getarticle()
    {

        $PDO = Db::getInstance();
        $limit =10;

        $statement = $PDO->prepare("SELECT * FROM posts ORDER BY pdate desc LIMIT $limit");
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;



    }
    public function postarticle()
    {
           /* $file_name = $_SESSION['id'] . "-" . time() . "-" . $this->m_sPhotoName;
            $file_tmp = $this->m_sPhotoNameT;
            $tmp = explode('.', $file_name);
            $file_ext = end($tmp);
            $ext = array("jpeg", "jpg", "png", "gif");
            if (in_array($file_ext, $ext) === false) {
                throw new Exception("Enkel jpeg, jpg, png of gif");
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "images/ArticlePictures/" . $file_name);
                return "images/ArticlePictures/" . $file_name;
            } else {
                echo "Error";
            }
*/
        $target_dir = "images/ArticlePictures/";
        $tmp = explode("." , $_FILES['foto']['name']);
        $target_ext = end($tmp);
        if( $target_ext == "jpg" || $target_ext == "png" || $target_ext == "jpeg" || $target_ext == "gif")
        {
            $target_tempname = $_SESSION['id'] . "-" . time() . "-" . $_FILES['foto']['name'];
            if(!file_exists($target_dir . $target_tempname)){
                if((move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir . $target_tempname))){
                    //file is geupload
                } else {
                    echo " A problem occured during file upload.";
                }
            }
        }
            $pTime = date("Y-m-d H:i:s");
            $fk_user_id = $_SESSION['id'];
            $conn = Db::getInstance();

            $stmt = $conn->prepare("INSERT INTO createpost (pdate, titel, categorie, inleiding, paragraaf, fk_user_id, photo) values ( :ptime, :title, :category, :intro, :paragraph, :fk_user_id, :photoarticle )");
            $stmt->bindValue(":category", $this->Category);
            $stmt->bindValue(":ptime", $pTime);
            $stmt->bindValue(":photoarticle", $target_tempname);
            $stmt->bindValue(":intro", $this->Intro);
            $stmt->bindValue(":fk_user_id", $fk_user_id);
            $stmt->bindValue(":paragraph", $this->Paragraph);
            $stmt->bindValue(":title", $this->Title);
            $stmt->execute();

            //die(json_encode(array('outcome' => true)));
        }



  /*  public function UploadImage()
    {
        $file_name = $_SESSION['id'] . "-" . time() . "-" . $this->m_sPhotoName;
        $file_size = $this->m_sPhotoSize;
        $file_tmp = $this->m_sPhotoNameT;
        $tmp = explode('.', $file_name);
        $file_ext = end($tmp);
        $ext = array("jpeg", "jpg", "png", "gif");
        if (in_array($file_ext, $ext) === false) {
            throw new Exception("Enkel jpeg, jpg, png of gif");
        }
        if ($file_size > 10485760) {
            throw new Exception('Het bestand moet kleiner dan 10MB zijn');
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "images/ArticlePictures/" . $file_name);
            return "images/ArticlePictures/" . $file_name;
        } else {
            echo "Error";
        }
    }
*/

}

?>