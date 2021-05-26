<?php
    class A
    {
        public function foo()
        {
            echo "foo";
        }

        public function bar()
        {
            if(method_exists($this, "foo"))
            {
                echo "Method Exit";
            }
            else
            {
                echo "Method does not exists";
            }
        }
    }

    $obj = new A;
    $obj->bar();

    # methos_exists() :
        /* method_exists is used to checks if the class method exists */
?>