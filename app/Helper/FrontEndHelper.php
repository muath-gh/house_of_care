<?php 

namespace App\Helper;

class FrontEndHelper {
    public function mapTypeToString($type){
        switch($type)
        {
            case "keto":
                return "منتجات الكيتو";
            case "lowcarb":
                return "منتجات اللو كارب";
        }
        
    }
}