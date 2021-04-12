<?php
    require_once __DIR__.'/Database.php';

    class Client {
        /**
         * Nom du client
         * @var string
         */
        private $nom;

        /**
         * Prenom du client
         * @var string
         */
        private $prenom;
        /**
         * L'age du client
         * @var integer
         */
        private $age;

        /**
         * Mail du client
         * @var string
         */
        private $email;

        /**
         *L'ID du client
         *@var integer
         */
        private $id;

        

        public function __construct($nom, $prenom, $age, $email){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->email = $email;
        }
        
        /**
         * Retourne le nom du client
         * @return string
         */
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getAge(){
            return $this->age;
        }
        public function getMail(){
            return $this->email;
        }
        public function getId(){
            return $this->id;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
        public function setAge($prenom){
            $this->age = $age;
        }
        public function setMail($email){
            $this->prenom = $email;
        }
        public function insert(){
            $database = new Database('clients');
            $this->id = $database->insert([
                                    'nom'    => $this->nom,
                                    'prenom' => $this->prenom,
                                    'age'    => $this->age,
                                    'email'  => $this->email
                                ]);
            return true;
        }

        public static function getClients($where = null, $order = null, $limit = null){
            return(new Database('clients'))->select($where, $order, $limit);
        }
        
    }
    
