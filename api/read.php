<?php

    include __DIR__ . '/../configs/config.php';
    include __DIR__ . '/../models/studentEntity.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $matricule = isset($_GET['matricule']) ? $_GET['matricule'] : die(json_encode(array("error" => "Matricule non fourni")));
        $student = new studentEntity();
        $student->setMatricule($matricule);
        $student->findByMatricule();
        if ($student->getNom() != '') {
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
        } else {
            http_response_code(404);
            echo json_encode(array("error" => "Etudiant non trouvé"));
        }
    }
    
?>