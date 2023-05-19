<?php
namespace application\model ; 

class UserModel extends Model{
    public function getUser($arrUserInfo, $pwFlg = true ){
        $sql = "select *  from user_info where u_id = :id ";

        if($pwFlg) {
            $sql .= " and u_pw = :pw ";
        }

        $prepare = [
            ":id" => $arrUserInfo["id"]
        ];

        if($pwFlg) {
            $prepare[":pw"] = $arrUserInfo["pw"];
        }
        
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();

        } catch (Exception $e) {
            echo "UserModel->getUser Error :" .$e->getMessage();
            exit();
        }
        return $result;

        
    }


    public function signUser($arrUserInfo){
        $sql = "INSERT INTO user_info (
            u_id
            ,u_pw
            ,u_email)
            VALUES
            (:id , :pw , :email)";
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
            ,":email" =>$arrUserInfo["email"]
        ];
        
        try {
            // $this->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
            

        } catch (Exception $e) {
            return false;

        // } finally{
        //     $this->closeConn();
        // }
        }
    }

    public function idSearch($arrUserInfo ) {
    
        $sql = " SELECT "
            ." u_id "
            ." FROM "
            ." user_info "
            ." WHERE "
            ." u_email = :u_email "
            ;
    
        $arr_prepare
        = array(
            ":u_email" => $arrUserInfo["email"]
        );
    
        try 
        {
            $stmt = $this->conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result= $stmt->fetchAll();
        } 
        catch ( Exception $e ) 
        {
            return $e->getMessage();
        }
        finally
        {
            $this->conn = null;
        }

        if(empty($result))
        {
            return "";
        }
        else
        {
            return $result[0];
        }
    }
    

    public function pwSearch($arrUserInfo ) {
    
        $sql = " SELECT "
            ." u_pw "
            ." FROM "
            ." user_info "
            ." WHERE "
            ." u_email = :u_email "
            ." AND "
            ." u_id = :u_id "
            ;
    
        $arr_prepare
        = array(
            ":u_email" => $arrUserInfo["email"]
            ,":u_id" => $arrUserInfo["id"]
        );
    
        try 
        {
            $stmt = $this->conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result= $stmt->fetchAll();
        } 
        catch ( Exception $e ) 
        {
            return $e->getMessage();
        }
        finally
        {
            $this->conn = null;
        }

        if(empty($result))
        {
            return "";
        }
        else
        {
            return $result[0];
        }
        
    }



public function updateUser($arrUserInfo){
    $sql = " UPDATE user_info
    SET  u_pw = :pw , u_email = :email
    WHERE u_no = :u_no ";
    $prepare = [
        ":pw" => $arrUserInfo["pw"]
        ,":email" =>$arrUserInfo["email"]
        ,":u_no" =>$arrUserInfo["u_no"]
    ];
    
    try {
        // $this->beginTransaction();
        $stmt = $this->conn->prepare($sql);
        $result = $stmt->execute($prepare);
        return $result;
        
        
    } catch (Exception $e) {
        return false;
        
        // } finally{
            //     $this->closeConn();
            // }
        }
        // var_dump($result);
        
    }


    function search($search_word)
    {
    if (!isset($_REQUEST["search_word"])) { // 검색어가 empty일 때 예외처리를 해준다.
        $search_word = "";
    } else {
        $search_word = $_REQUEST["search_word"];
    }

    $sql =
        " SELECT " 
        ." *" 
        ." FROM " 
        ." goods " 
        ." WHERE " 
        ."  g_name LIKE CONCAT('%', :word, '%') " ;

    $arr_prepare = array(
        ":word" => $search_word
    );
    try {
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute( $arr_prepare );
        $result= $stmt->fetchAll();
    } catch (Exception $e) {
        return $e->getMassage();
    } finally {
        $conn = null;
    }
    return $result;
}

public function basKet($arr) {
    
    $sql = " SELECT bas.g_no , gds.g_name , gds.g_price , gds.g_pictur
    FROM basket AS bas INNER JOIN goods AS gds
    ON bas.g_no = gds.g_no
    WHERE u_no = :u_no "
        ;

    $arr_prepare
    = array(
        ":u_no" => $arr["u_no"]
    );

    try 
    {
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute( $arr_prepare );
        $result= $stmt->fetchAll();
    } 
    catch ( Exception $e ) 
    {
        return $e->getMessage();
    }
    finally
    {
        $this->conn = null;
    }
    return $result;
    }

    public function basketUser($arrUserInfo){
        $sql = "INSERT INTO basket (
            u_no
            ,g_no
            )
            VALUES
            (:u_no , :g_no )";
        $prepare = [
            ":u_no" => $arrUserInfo["u_no"]
            ,":g_no" => $arrUserInfo["g_no"]
        ];
        
        try {
            // $this->beginTransaction();
                $stmt = $this->conn->prepare($sql);
                $result = $stmt->execute($prepare);
                return $result;
       

        } catch (Exception $e) {
            return $e->getMessage("이미 등록되었습니다");

        // } finally{
        //     $this->closeConn();
        // }
        }
    }
    
    public function delete($arrUserInfo){
        $sql = " DELETE 
        FROM basket
        WHERE u_no = :u_no
        AND g_no = :g_no";
        $prepare = [
            ":u_no" => $arrUserInfo["u_no"]
            ,":g_no" => $arrUserInfo["g_no"]
        ];
        
        try {
            // $this->beginTransaction();
                $stmt = $this->conn->prepare($sql);
                $result = $stmt->execute($prepare);
                return $result;
       

        } catch (Exception $e) {
            return $e->getMessage("");

        // } finally{
        //     $this->closeConn();
        // }
        }
    }
    
    public function checkbasket($arrUserInfo){
        $sql = " SELECT COUNT(*) as cnt
            FROM basket 
            WHERE u_no = :u_no
            AND g_no = :g_no ";
        $prepare = [
            ":u_no" => $arrUserInfo["u_no"]
            ,":g_no" => $arrUserInfo["g_no"]
        ];
        
        try {
            // $this->beginTransaction();
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($prepare);
                $result = $stmt->fetchAll();
                // if($result[0]  >  0 ){
                //     return $result;
                // }
                // else{
                //     return false ;
                // }
                return $result;
                

        } catch (Exception $e) {
            return $e->getMessage("이미 등록되었습니다");

        // } finally{
        //     $this->closeConn();
        // }
        }
    }
}
?>