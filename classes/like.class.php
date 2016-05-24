<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/24/2016
 * Time: 1:25 PM
 */
include_once("db.class.php");
class upvote
{

    private $m_sLikeid;
    private $m_sFk_Post_id;
    private $m_sFk_User_id;





    // SETTER
    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {
            case "Like":
                $this->m_sLikeid = $p_vValue;
                break;
            case "PostId":
                $this->m_sFk_Post_id = $p_vValue;
                break;
            case "UserId":
                $this->m_sFk_User_id = $p_vValue;
                break;






        }
    }

    // GETTER
    public function __get($p_sProperty)
    {
        $vResult = null;
        switch ($p_sProperty) {
            case "Like":
                $vResult = $this->m_sLikeid;
                break;
            case "PostId":
                $vResult = $this->m_sFk_Post_id;
                break;
            case "UserId":
                $vResult = $this->m_sFk_User_id;
                break;



        }
        return $vResult;
    }
    public function likecheck()
    {
        $conn = Db::getInstance();
        $query = $conn->prepare("SELECT * from upvote where fk_post_id = :postid AND fk_user_id = :userid");
        $query->bindValue(":postid", $_SESSION['id']);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $del = $result['id'];
            if ($_SESSION['id'] = $result['fk_user_id']) {
                $stmt = $conn->prepare("DELETE from upvote where id = $del;");
                $stmt->execute();
                } else {
                    $stmt = $conn->prepare("INSERT INTO upvote (fk_post_id, fk_user_id, uptime) values (:postid, :userid, :uptime )");
                    $stmt->bindValue(":postid", $this->PostId);
           	        $stmt->bindValue(":userid", $this->UserId);
                    $stmt->bindValue(":uptime", $this->Uptime);
		            $stmt->execute();
                }
            } else {
                return false;
            }
        }

    public function likecount()
    {
        $conn = Db::getInstance();

    }

}

?>