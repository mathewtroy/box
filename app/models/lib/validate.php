<?php

    /** 
     * 
     * Get string length.
     *
     * Returns Boolean True if the length matches our requirement.
     *  
     * 
     * @param string $login The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginMin ($login) {
        return strlen($login) >= 4;
    }


    /** 
     * 
     * Get string length.
     *
     * Returns Boolean True if the length matches our requirement.
     *  
     * 
     * @param string $login The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginMax ($login) {
        return strlen($login) <= 20;
    }


    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $login The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valLoginPattern($login) {
        return preg_match("/^[a-z0-9]*$/", $login);
    }


// Check Name


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $name The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNameMin ($firstname) {
        return strlen($firstname) >= 2;
    }


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $firstname The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNameMax ($firstname) {
        return strlen($firstname) <= 20;
    }


    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $name The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNamePattern ($firstname) {
    return preg_match("/^[a-zA-Z]*$/", $firstname);
    }


// Check Email


    /**
     * 
     * Get value of string.
     * 
     * Returns Boolean True if the email is valid.
     * 
     * 
     * @param string $email The `string` contains input.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valEmailAll ($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
    return true;
    }


// Check Password


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $pass The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success. 
     * 
     */
    function valPasswordMin ($pass) {
        return strlen($pass) >= 6;
    }

    
    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $pass The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success. 
     * 
     */
    function valPasswordMax ($pass) {
        return strlen($pass) <= 60;
    }

?>