<?php

set_include_path("pages");

if (isset($_GET['pg'])) {
    if (substr_count($_GET['pg'], "/") > 0) {
        $pagina = explode("/", $_GET['pg']);
        if (!empty($pagina[1])) {
            if (is_file('pages/' . $pagina[1] . '.php')) {
                include $pagina[1] . '.php';
            } elseif (!isset($pagina[2])) {
                echo "<script>alert ('Essa não e uma pagina valida1!') ; </script>";             
                include "error.php";
            }
        } else {
            if (is_file('pages/' . $pagina[0] . '.php')) {
                include $pagina[0] . '.php';
            } else {
                echo "<script>alert ('Essa não e uma pagina valida2!') ; </script>";        
                include "error.php";
            }
        }
    } else {
        if (is_file('pages/' . $_GET['pg'] . '.php')) {
            include $_GET['pg'] . '.php';
        } else {
            echo "<script>alert ('Essa não e uma pagina valida3!') ; </script>";
            include "error.php";
        }
    }
} else {
    include "../";
}
