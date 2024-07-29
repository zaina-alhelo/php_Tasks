<?php
class student {
    private $name ;
    private $age ;
    private $studentID ;

    function __construct($name , $age , $studentID){
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $studentID;

    }
    function __destruct(){
        echo "student destroyed . <br>";
    }
    public function getDetails() {
        return "student name :{$this->name} , student age : {$this->age} , studentID : {$this->studentID}";
    }
    public function getname(){
        return $this->name;
    }
    public function getage(){
        return $this->age;
    }
    public function getID(){
        return $this->studentID;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function setage($age){
        $this->age=$age;
    }
    public function setID($studentID){
        $this->studentID=$studentID;
    }
}
class classroom {
    public $students=[];

    public function addstudent(student $student){
        $this->students[]=$student;

    }
    public function removestudent($ID){
        // unset($this->students[getID($ID)]);
           
        
    foreach ($this->students as $key => $value) {
      
        if ($value->getID() === $ID) {
         
            unset($this->students[$key]);
            echo "student removed.<br>";
            
        }
    }
        

    }
    public function liststudent(){
        foreach($this-> students as $student){
            echo $student->getDetails()."<br>";
        }
    }
}



$student1 = new student("zaina" , 20,1);
$student2 = new student("student" , 40,5);
// var_dump($student1->getDetails());

$class = new classroom();
$class->addstudent($student1);

$class->addstudent($student2);

$class->liststudent();
echo "<br>";
$class->removestudent(5);
$class->liststudent();