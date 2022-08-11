<?php

$val1 = $_POST['val1'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
                                    $name="Done";
                                    $team="Danny Safaya";
                                    $return_arr = array('name'=>$name, 'team'=>$team);}

              

                    
          
                                                
                                                else{$name="There is an error please try again later";
                                                    $team="";
                                                    $return_arr = array('name'=>$name); }          
                    
                    
                    
                    
        echo json_encode($return_arr);











?>
<?PHP
/*$name="hi there";
$return_arr = array('name'=>$name);

echo json_encode($return_arr);*/?>