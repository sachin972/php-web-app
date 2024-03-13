<?php
// api/index.php
switch($id) {
  default: include('index.php');
  break; case "1": include('contact.php');
  break; case "2": include('industries.php');
  break; case "3": include('aboutus.php');
  break; case "4": include('clients.php');
}
>
