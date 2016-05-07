<?php

function emailValidation($email) { 
 return filter_var(filter_var($email, FILTER_SANITIZE_EMAIL),FILTER_VALIDATE_EMAIL); 
}