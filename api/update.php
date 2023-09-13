<?php

    include __DIR__ . '/../configs/config.php';
    include __DIR__ . '/../models/studentEntity.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $body = json_decode(file_get_contents("php://input"));
    $student = new studentEntity($body->matricule, $body->nom, $body->prenom, $body->sexe, $body->dateDeNaissance, $body->telephone);
    $matricule = isset($_GET['matricule']) ? $_GET['matricule'] : die(json_encode(array("error" => "Matricule non fourni")));
    
    if($student->update($matricule)){
        http_response_code(200);
        $data = array(
            "matricule" => $student->getMatricule(),
            "nom" => $student->getNom(),
            "prenom" => $student->getPrenom(),
            "sexe" => $student->getSexe(),
            "dateDeNaissance" => $student->getDateDeNaissance(),
            "telephone" => $student->getTelephone()
        );
        echo json_encode($data);
    } else{
        http_response_code(404);
        echo json_encode(array("error" => "Impossible de mettre à jour"));
    }
}
?>