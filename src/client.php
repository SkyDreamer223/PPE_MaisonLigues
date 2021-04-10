<?php

    class Client {
        private String $nom;
        private String $prenom;
        private int $age;
        private String $email;

        public function __construtor($nom, $prenom, $age, $email){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->email = $email;
        }
    }

?>