<!DOCTYPE html>
<html>
    <head>
        <title>IF-ELSE</title>
    </head>
    <body>
        <p>
            <?php
                class Person{
                    public $isAlive;
                    public $firstname;
                    public $lastname;
                    public $age;
                    
                    public function __construct($isAlive, $firstname, $lastname, $age){
                        $this->isAlive = $isAlive;
                        $this->firstname = $firstname;
                        $this->lastname = $lastname;
                        $this->age = $age;
                    }
                    
                    public function greet(){
                        return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
                    }
                }
            $Person1 = new Person(true, 'Tom', 'Kouwenhoven', 21);
            $Person2 = new Person(false, 'Jurre', 'van Rijswijck', 22);
            $Person3 = new Person(true, 'Lilsis', 'Bitch', 25);
            $Person4 = new Person(false, 'Justin', 'Bieber', 21);
            $Person5 = new Person(true, 'Aubrey Drake', 'Graham', 29);
            
            $Humans = array($Person1, $Person2, $Person3, $Person4, $Person5);
            
            $aliveCount = 0;
            $deadCount = 0;
            
            foreach($Humans as $person){
                if($person->isAlive == true)
                {
                    echo "Hi there, my name is: " . $person->firstname . " " . $person->lastname . " and I am " .  $person->age . " years old. <br>";
                    $aliveCount = $aliveCount + 1;                    
                }
                else{
                    echo "Hi there, my name is: " . $person->firstname . " " . $person->lastname . "and I didn't make it longer than: " .  $person->age . " years... <br>";
                    $deadCount = $deadCount + 1; 
                }
            }
            echo "Unfortunately people die.. In todays society there are " . $aliveCount . "    people alive, however " . $deadCount . " people are dead."
            ?>
        </p>
    </body>
</html>