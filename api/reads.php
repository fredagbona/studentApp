<?php
   
    include __DIR__ . '/../configs/config.php';
    include __DIR__ . '/../models/studentEntity.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $students = new studentEntity();
        $stmt = $students->findAll();
        if(!empty($stmt)){
            
            
            echo json_encode($stmt);
        }
        else{
            http_response_code(404);
            echo json_encode(
                array("error" => "Aucun Etudiant enregistré")
            );
        }
    }
?>