<?php
class Upload {


   public static function images($files){ 


        $extentions = ['jpeg', 'jpg','png', 'gif']; 

    $name_files = [];

    
      $count_files = count($files['name']); 

     for($i = 0 ; $i< $count_files; $i++){
        $uniq_name = uniqid('', true);
           $separator = explode('.',$files['name'][$i]);
           foreach($separator as $value ){ 

            if( in_array($value, $extentions)){
                   $new_name= $uniq_name.'.'.$value;
                 $name_files[] = $new_name;
            }
           }
      }


      $tmp_name = $files['tmp_name'];
       for($j = 0; $j< count($tmp_name); $j++){

         move_uploaded_file($tmp_name[$j], './images/'.$name_files[$j]);
   
           }

    
      return $name_files;
      }
}