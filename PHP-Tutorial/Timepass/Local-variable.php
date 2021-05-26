<?php
  function my_fun(){
      $a = 10;
      echo $a;  // Local variable scope
  }  

  my_fun();

  # Local Varable :
    /* A variable declared within a PHP function is local and can only be accessed within
    that function.

    You can have local variables with the same name in different functions,
    because local variables are only recognized by the function in which they are 
    declared.

    Local variables are deleted as soon as the function is completed.
    */
?>