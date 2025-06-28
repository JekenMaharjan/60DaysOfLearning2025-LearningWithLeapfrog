<?php
    // Example 1
    // function divide1($dividend, $divisor) {
    //     if($divisor == 0) {
    //         throw new Exception("Division by zero");
    //     }
    //     return $dividend / $divisor;
    // }

    // echo divide1(5, 0);


    // Example 2
    function divide2($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
    
    try {
        echo divide2(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide.";
    }


    // Example 3
    function divide3($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
    
    try {
        echo divide3(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide. ";
    } finally {
        echo "Process complete.";
    }


    // Example 4
    function divide4($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }
    
    try {
        echo divide4(5, 0);
    } finally {
        echo "Process complete.";
    }


    // Example 5
    function divide5($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }
    
    try {
        echo divide5(5, 0);
    } catch(Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
    }