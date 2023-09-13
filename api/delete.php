<?php

    include __DIR__ . '/../configs/config.php';
    include __DIR__ . '/../models/studentEntity.php';

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $student = new studentEntity();
        $matricule = isset($_GET['matricule']) ? $_GET['matricule'] : die(json_encode(array("error" => "Matricule non fourni")));
        
        if($student->delete($matricule)){
            http_response_code(200);
            echo json_encode(array("message" => "Etudiant supprimé avec succès"));
        } else{
            http_response_code(404);
            echo json_encode(array("error" => "Impossible de supprimer l'étudiant: Matricule inexistant"));
        }
    }
?>