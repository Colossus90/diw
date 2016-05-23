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
    private $m_sFk_user_id;
    private $m_sParagraph;
    private $m_sTitle;

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
                case "Fk_user_id":
                    $this->m_sFk_user_id = $p_vValue;
                    break;
                case "Paragraph":
                    $this->m_sParagraph = $p_vValue;
                    break;
                case "Title":
                    $this->m_sTitle = $p_vValue;
                    break;
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
                    case "Fk_user_id":
                        $vResult = $this->m_sFk_user_id;
                        break;
                    case "Paragraph":
                        $vResult = $this->m_sParagraph;
                        break;
                    case "Title":
                        $vResult = $this->m_sTitle;
                        break;

                    }
                    return $vResult;
         }

    public function postarticle()
    {
        try{
            $conn = Db::getInstance( array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $stmt = $conn->prepare("INSERT INTO createpost (id, pdate, titel, categorie, inleiding, paragraaf, fk_user_id, photo) values (:category, :ptime, :photoarticle, :intro, :articleid, :fk_user_id, :paragraph, :title )");
            $stmt->bindValue(":category", $this->Category);
            $stmt->bindValue(":ptime", $this->pTime);
            $stmt->bindValue(":photoarticle", $this->PhotoArticle);
            $stmt->bindValue(":intro", $this->Intro);
            $stmt->bindValue(":articleid", $this->ArticleId);
            $stmt->bindValue(":fk_user_id", $this->Fk_user_id);
            $stmt->bindValue(":paragraph", $this->Paragraph);
            $stmt->bindValue(":title", $this->Title);
            $stmt->execute();

            //die(json_encode(array('outcome' => true)));
        }
        catch(PDOException $ex){
            die(json_encode(array('outcome' => false, 'message' => $ex)));
        }
    }




}

?>