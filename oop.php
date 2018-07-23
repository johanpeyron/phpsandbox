<?php
    class Person {
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($name, $email){
          $this->name = $name;
          $this->email = $email;
          echo __CLASS__.' created<br>';
        }
        
        public function __destruct(){
          echo __CLASS__.' destroyed<br>';
        }
        
        public function setName($name){
          $this->name = $name;
        }
        
        public function getName(){
          return $this->name.'<br>';
        }
        
        public function setEmail($email){
          $this->email = $email;
        }
        
        public function getEmail(){
          return $this->email.'<br>';
        }

        public static function getAgelimit(){
            return self::$ageLimit;
        }
        
      }
      
      # Static Props and Methods
      //echo Person::$ageLimit;
      echo Person::getAgelimit();

    // $person1->name = "Simon Peyron";
    //echo $person1->name;
    
    //$person1 = new Person('Simon Peyron', 'simonpeyron$hotmail.com');
    //$person1->setName('Simon Peyron');
    //$person1->setEmail('simonpeyron$hotmail.com');
    
    //echo $person1->getName();
    //echo $person1->getEmail();
    
    class Customer extends Person
    {
        private $balance;

        public function __construct($name, $email, $balance)
        {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }
        
        public function setBalance($balance)
        {
            $this->balance = $balance;
        }
        
        public function getBalance()
        {
            return $this->balance.'<br>';
        }

        public static function getAgelimit()
        {
            return self::$ageLimit;
        }
    }

    
    //$customer1 = new Customer('Simon Peyron', 'simonpeyron$hotmail.com', 888);
    //echo  $customer1->getBalance();
    