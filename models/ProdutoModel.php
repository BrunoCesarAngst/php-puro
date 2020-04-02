<?php 
    require_once('models/Model.php');

    class ProdutoModel extends Model {
        public function lista(){
            $sql = "SELECT * FROM produtos";
            $resultado = $this->select($sql);
            $arrayCliente = array();
                    
            if($resultado->num_rows > 0){
                while($linha = $resultado->fetch_assoc()){
                    array_push($arrayCliente, $linha);
                }
            } else {
                echo "0 results";
            }
            return $arrayCliente;
        }   

        public function create($cliente){

        }
    }
?>