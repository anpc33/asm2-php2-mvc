<?php
if (!function_exists('old')) {
  function old($key, $default = '')
  {
    return $_POST[$key] ?? $default;
  }
}
