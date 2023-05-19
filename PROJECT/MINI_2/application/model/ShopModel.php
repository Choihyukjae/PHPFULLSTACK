<?php


namespace application\model ; 

class ShopModel extends Model {

    public function goodsList() {
    
        $sql = " SELECT "
            ." * "
            ." FROM "
            ." goods "
            ;
    
        $arr_prepare
        = array();
    
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
        return $result ;
    }
}
?>