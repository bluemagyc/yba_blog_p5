<?php

require('controllers/Controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'post') {
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                if ($id != 0) {
                    post($id);
                }
                 else throw new Exception("Identifiant du billet non valide");
            } else throw new Exception("Identifiant de billet non défini");
        } else throw new Exception("Action non valide");
    } else {
        home();
    }

}
 catch (Exception $e) {
    echo $e;
    error($e->getMessage());
}
