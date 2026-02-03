<?php

$run_foo = false;
// conditional method
if ($run_foo) {
    function foo()
    {
        echo "Inside Condition Foo Method";
    }
}

if ($run_foo) {
    foo();
}

// When $run_foo is true, condition passes and system knows foo() method.
// When it is false, condition fails and foo() is nor processed. So system doesn't know foo()
// ERROR: Fatal error. Call to undef func

// Function within another func

function OutsideFunc()
{
    function InsideFunction()
    {
        echo "Inside Function is called from global scope";
    }
}

OutsideFunc();
InsideFunction();

// When inside func is called before outside func, system does n't know inside func,
// ERROR: Fatal error. Call to undef func
