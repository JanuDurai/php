<?php

class PersonInfo
{
    private $name;
    private $age;

    // get methods
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    //  set methods
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}

$obj = new PersonInfo();
$obj->setName("Janu");
$obj->setAge(23);

echo "Name: ", $obj->getName(), "\n";
echo "Age: ", $obj->getAge(), "\n";

?>