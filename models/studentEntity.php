<?php

    include "database.php";

    class studentEntity{
        
        private $matricule;
        private $nom;
        private $prenom;
        private $sexe;
        private $dateDeNaissance;
        private $telephone;


        /**
         * @param string $matricule -> Numero matricule de l'étudiant
         * @param string $nom -> Nom de l'etudiant
         * @param string $prenom -> Prenom de l'étudiant
         * @param string $sexe -> Sexe de l'étudiant
         * @param string $dateDeNaissance -> Date de Naissance de l'étudiant
         * @param number $telephone -> Numero de téléphone de l'étudiant
         */
        public function __construct($matricule = '', $nom = '', $prenom = '', $sexe = '', $dateDeNaissance = '', $telephone = 0)
        {
            $this->matricule = $matricule;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->dateDeNaissance = $dateDeNaissance;
            $this->telephone = $telephone;
        }

        /**
         * @return string $matricule
         */
        public function getMatricule(){
            return $this->matricule;
        }

        /**
         * @param string $matricule
         */
        public function setMatricule($matricule){
            $this->matricule = $matricule;
        }

        /**
         * @return string $nom
         */
        public function getNom(){
            return $this->nom;
        }

        /**
         * @param string $nom
         */
        public function setNom($nom){
            $this->nom = $nom;
        }

        /**
         * @return string $prenom
         */
        public function getPrenom(){
            return $this->prenom;
        }

        /**
         * @param string $prenom
         */
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        /**
         * @return string $sexe
         */
        public function getSexe(){
            return $this->sexe;
        }

        /**
         * @param string $sexe
         */
        public function setSexe($sexe){
            $this->sexe = $sexe;
        }

        /**
         * @return date $dateDeNaissance
         */
        public function getDateDeNaissance(){
            return $this->dateDeNaissance;
        }

        /**
         * @param date $dateDeNaissance
         */
        public function setDateDeNaissance($dateDeNaissance){
            $this->dateDeNaissance = $dateDeNaissance;
        }

        /**
         * @return number $telephone
         */
        public function getTelephone(){
            return $this->telephone;
        }

        /**
         * @param number $telephone
         */
        public function setTelephone($telephone){
            $this->telephone = $telephone;
        }

        public function save(){
            global $connexion;
            $studentSaveQuery = "INSERT INTO Students (matricule, nom, prenom, sexe, dateDeNaissance, telephone) VALUES(?, ?, ?, ?, ?, ?)";
            $studentSave = $connexion->prepare($studentSaveQuery);
            if(
                $studentSave->execute(array("$this->matricule",
                "$this->nom", 
                "$this->prenom", 
                "$this->sexe", 
                "$this->dateDeNaissance", 
                "$this->telephone"
                ))
            ){
                return true;
            }else{
                return false;
            }
            
        }

        public function findByMatricule(){
            global $connexion;
            $findUserQuery = "SELECT * FROM Students WHERE matricule = ?";
            $findUser = $connexion->prepare($findUserQuery);
            $findUser->execute(array($this->matricule));
            $studentFound = $findUser->fetch();
            $this->setMatricule($studentFound['matricule']);
            $this->setNom($studentFound['nom']);
            $this->setPrenom($studentFound['prenom']);
            $this->setSexe($studentFound['sexe']);
            $this->setDateDeNaissance($studentFound['dateDeNaissance']);
            $this->setTelephone($studentFound['telephone']);
        }

        public function findAll() {
            global $connexion;
            $findStudentsQuery = "SELECT * FROM Students ORDER BY matricule DESC";
            $findStudents = $connexion->query($findStudentsQuery);
            $students = $findStudents->fetchAll();
            return $students;
        }

        public function update($matricule){
            global $connexion;
            $updateUserQuery = "UPDATE Students SET matricule = ?, nom = ?, prenom = ?, sexe = ?, dateDeNaissance = ?, telephone = ? WHERE matricule = ?";
            $updateUser = $connexion->prepare($updateUserQuery);
            if($updateUser->execute(array("$this->matricule", 
            "$this->nom", 
            "$this->prenom", 
            "$this->sexe",
            "$this->dateDeNaissance", 
            "$this->telephone",
            $matricule
            ))){
                return true;
            }else{
                return false;
            }
        }

        public function delete($matricule){
            global $connexion;
            $deleteUserQuery = "DELETE FROM Students WHERE matricule = ?";
            $deleteUser = $connexion->prepare($deleteUserQuery);
           if( $deleteUser->execute(array("$matricule"))){
            return true;
           }else{
            return false;
           }
        }


    }




?>