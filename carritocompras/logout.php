<?php
session_start();
session_unregister('cart');
session_destroy();
?>