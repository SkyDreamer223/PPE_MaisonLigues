<?php
    require_once __DIR__.'/Database.php';
  

    class Client {
        
        /**
         *L'ID du client
         *@var integer
         */
        
         public $id_client;
        /**
         * Nom du client
         * @var string
         */
        public $nom;

        /**
         * Prenom du client
         * @var string
         */
        public $prenom;
        /**
         * L'age du client
         * @var integer
         */
        public $age;

        /**
         * Mail du client
         * @var string
         */
        public $email;

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
        /**
         * Change le mail du client
         *
         * @param string email
         * @return void
         */
        public function setMail($email){
            $this->prenom = $email;
        }
        public function insert(){
            $database = new Database('clients');
            $this->id_client = $database->insert([
                                    'nom'    => $this->nom,
                                    'prenom' => $this->prenom,
                                    'age'    => $this->age,
                                    'email'  => $this->email
                                ]);
            return true;
        }

        public static function getClients($where = null, $order = null, $limit = null){
            return(new Database('clients'))->select($where, $order, $limit)
                                           ->fetchAll(PDO::FETCH_CLASS, self::class);
        }
        /**
         * Return le client 
         *
         * @param string $id
         * @return object
         */
        public static function getClient($id){
            return(new Database('clients'))->select($id)
                                           ->fetchObject(self::class);
        }
        /**
         * Mis-??-jour du client dans la base de donn??es
         *
         * @param string $id
         * @return void
         */
        public function updateClient(){
            (new Database('clients'))->update('id_client = '.$this->id_client, [
                'nom'    => $this->nom,
                'prenom' => $this->prenom,
                'age'    => $this->age,
                'email'  => $this->email
            ]);
        }

        
        public function deleteClient(){
            (new Database('clients'))->delete('id_client = '.$this->id_client);
        }
        
    }
    
