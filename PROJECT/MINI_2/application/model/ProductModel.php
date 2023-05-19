<?php


namespace application\model ; 

class ProductModel extends Model {

    public function gdList($arrGet) {
    
        $sql = " SELECT "
            ." * "
            ." FROM "
            ." goods "
            ." WHERE "
            ." g_no = :g_no "
            ;
    
        $arr_prepare
        = array(
            ":g_no" => $arrGet["g_no"]
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
        return $result ;
    }

}
?>