<?php

// Check Name


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $name_b The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNameBookMin ($name_b) {
        return strlen($name_b) >= 2;
    }


    /**
     * 
     * Get string length.
     * 
     * Returns Boolean True if the length matches our requirement.
     * 
     * 
     * @param string $name_b The `string` being measured for length.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNameBookMax ($name_b) {
        return strlen($name_b) <= 20;
    }


    /**
     * 
     * Get value of string
     * 
     * Returns Boolean True if the value of input contains a pattern.
     * 
     * 
     * @param string $name_b The `string` contains input
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valNameBookPattern ($name_b) {
        return preg_match("/^[a-zA-Z]*$/", $name_b);
    }

/*-----------------------------------------------------------------------------*/
// Check Email


    /**
     * 
     * Get value of string.
     * 
     * Returns Boolean True if the email is valid.
     * 
     * 
     * @param string $email_b The `string` contains input.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valBookEmailAll ($email_b) {
        if (!filter_var($email_b, FILTER_VALIDATE_EMAIL)) return false;
    return true;
    }


    /**
     * 
     * Get value of string.
     * 
     * Returns Boolean True if the entered value is within the given interval.
     * 
     * 
     * @param string $phone The `string` contains input.
     * @return bool `True` if the `string` on success,
     * and `False` if the `string` is not success.
     * 
     */
    function valStartPhone ($phone) {
        return (($phone >= 700000000)
        &&($phone < 800000000)
        &&(strlen($phone) == 9));
    }


/*-----------------------------------------------------------------------------*/
// Check reservation
// Only date format
// You cannot use the date from Past
// Only actual date format from Today
// Validate with pattern and PHP function
// min="< ?= date('Y-m-d') ? >"


?>