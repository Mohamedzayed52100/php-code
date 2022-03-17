<?php

abstract class empolyee
{
    protected $name;
    protected $id;
    protected $salary;
    public function __construct($name, $id, $salary)
    {
        $this->name = $name;
        $this->id = $id;
        $this->salary = $salary;
    }
    public function setName($name)
    { 
        $this->name = $name;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    abstract public function calculateSalry($salary);
}

class manger extends empolyee
{
    private $kind;
    public function __construct($name, $id, $salary, $kind)
    {
        parent::__construct($name, $id, $salary);
        $this->kind = $kind;
    }

    public function calculateSalry($salary)
    {
        return $salary * 5;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind(){
        return $this->kind;

    }

}
 class part_time_empolyee extends empolyee{
     private $hours;

    public function __construct($name, $id, $salary,  $hours){
        parent::__construct($name, $id, $salary);
        $this->name = $name;
        $this->id = $id;
        $this->salary = $salary;
        $this->hours = $hours;
    

    }


    public function setHours($hours){
        $this->hours = $hours;
    }
    public function getHours(){
        return $this->hours;
    }



     public function calculateSalry($salary){
         return $this->hours *$this->salary * .4;

     }



} 





$manger1=new manger("mohamed" , 123, 15600, 'Ceo');
echo $manger1->calculateSalry(15600);
echo "<br>";

$partEmp= new part_time_empolyee('ahmed', 125, 5966,30);
echo $partEmp->calculateSalry(5966);


