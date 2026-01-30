<?php
namespace Admin {
echo '"', __NAMESPACE__, '"';

    class User
    {
        public function getName()
        {
            return "Admin User";
        }
    }
}

namespace src\app\service {

    class subNameSpaceClass
    {

        public function printlog()
        {
            echo "Inside sub name space class";
        }
    }
}
