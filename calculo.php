<?php

    if(isset($_REQUEST['calcular'])){
        $num1= $_REQUEST['num1'];
        $num2= $_REQUEST['num2'];
        if($num1=="" || $num2==""){
            echo "Debe ingresar dos cantidades";
        } else{
        $option= $_REQUEST['valores'];
            switch($option){
            case 0: 
                echo "$num1 + $num2 = ".operaciones::sumar($num1,$num2); break;
            case 1:
                echo "$num1 - $num2 = ".operaciones::restar($num1,$num2); break;
            case 2:
                echo "$num1 * $num2 = ".operaciones::multiplicar($num1,$num2); break;
            case 3:
                echo "$num1 / $num2 = ".operaciones::divicion($num1,$num2); break;
            }   
        }
        
    }

    class operaciones{
        public static function sumar($num1,$num2){
        $suma= $num1 + $num2;
        return $suma;
        }

        public static function restar($num1,$num2){
        $resta= $num1 - $num2;
        return $resta;
        }

        public static function multiplicar($num1,$num2){
        $multi= $num1 * $num2;
        return $multi;
        }

        public static function divicion($num1,$num2){
        $dividir= $num1 / $num2;
        return $dividir;
        }
    }
?>