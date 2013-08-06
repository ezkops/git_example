<?php
  

  $record = array('first_name' => 'eliezer', 'last_name' => 'kops');

  print_r($record);

  $records = array();
 
  $records[] = $record;
  $record['first_name'] = 'tzvi';
  $record['last_name'] = 'bock';
  $records[] = $record;
  
  
 
  $record['first_name'] = 'asher';
  $record['last_name'] = 'rendler';
  print_r($records);







?>
