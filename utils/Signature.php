<?php

class Signature{ 

/*generate image signature*/
    public static function image_signature($data, $path){ 
        $name_signature = uniqid('', true);
        $data_uri = $data;
        $encode_image = explode(',', $data_uri)[1];
       $decoded_image = base64_decode($encode_image); 
       $file  = $name_signature.'.png';
       file_put_contents($path.$file, $decoded_image);
      }
    
}
?>