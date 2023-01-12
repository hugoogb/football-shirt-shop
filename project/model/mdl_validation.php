<?php
function filter($values_register): void
{
    $isname = filter_var(·name, FILTER_SANITIZE_STRING) != false;
    $isemail = filter_var(·email, FILTER_VALIDATE_EMAIL) != false;
    $isaddress = filter_var(·address, FILTER_SANITIZE_STRING_) != false;
    $iscity = filter_var(·city, FILTER_SANITIZE_STRING) != false;
    $ispostal_code_zip = filter_var(·postal_code_zip, FILTER_VALIDATE_int) != false;
}

