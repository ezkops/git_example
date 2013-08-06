<?php
  $myarray = array('steve', 'joe', 'stan');
  $myarray[] = 'ezkops';
  print_r($myarray);

  $associative_array = array('name1' => 'joe', 'name2' => 'stan');
  $associative_array['myobject'] = new myclass();
  print_r($associative_array);
  echo count($associative_array);
class myclass {} 
?>
