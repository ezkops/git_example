<?php
  

  $record = array('first_name' => 'eliezer', 'last_name' => 'kops');

   $record = array_flip($record); 

  $records = array();
  
 
  $records[] = $record;
  $record['first_name'] = 'tzvi';
  $record['last_name'] = 'bock';
  $records[] = $record;
  
  
 
  $record['first_name'] = 'asher';
  $record['last_name'] = 'rendler';
  $records[] = $record;

 
  $record['first_name'] = 'avrumi';
  $record['last_name'] = 'fischman';
  $records[] = $record;
 
    

   print_r($records);







?>
