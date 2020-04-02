<?php 
    class Controller {
        public function template ($content) {
            require_once('views/header.php');
            require_once($content);
            require_once('views/footer.php');  
        } 

        public function templateData ($content, $data) {
            $data;
            require_once('views/header.php');
            require_once($content);
            require_once('views/footer.php');  
        }
        
        public function saveFile ($file, $nameFile) {
            $photo_temp = $file["tmp_name"];	// caminho temporário do arquivo
            $photo_name = $file["name"];		// nome
            echo $nameFile;
            $extension = str_replace('.','',strrchr($photo_name, '.')); 

            $max_width = 600;
            $max_height = 600;

            $img = null;

            if ($extension == 'jpg' || $extension == 'jpeg') { 
                $img = @imagecreatefromjpeg($photo_temp);
            } else if ($extension == 'png') { 
                $img = @imagecreatefrompng($photo_temp);
            } else if ($extension == 'gif') { 
                $img = @imagecreatefromgif($photo_temp); 
            }  else     
                $img = @imagecreatefromjpeg($photo_temp); 

            if ($img) { 
                $width  = imagesx($img); 
                $height = imagesy($img); 
                $scale  = min($max_width/$width, $max_height/$height); 
                if ($scale < 1) { 
                    $new_width = floor($scale*$width); 
                    $new_height = floor($scale*$height);
                    $tmp_img = @imagecreatetruecolor($new_width, $new_height);
                    @imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                                    $new_width, $new_height, $width, $height);  
                    @imagedestroy($img); 
                    $img = $tmp_img; 
                }           
            }

            return imagejpeg($img, "assets/img/".$nameFile.".jpg"); 
        }
    }
?>