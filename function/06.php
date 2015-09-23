<?php
/**
 * Write an integer function SumRange(A, B) that returns a sum of all integers in the range A to B inclusively (A and B are integers).
 * In the case of A > B the function returns 0.
 * Using this function, find a sum of all integers in the range A to B and in the range B to C provided that integers A, B, C are given.
 */
class Test
{
    public $parents = "father and mother";
    public $id;
    public $name = 'tolea';
    private $age;
    protected $surname;

    public function __construct($s = 'xasrr')
    {
        $this->surname = $s;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }


}

function SumRange($A, $B)
{
    $sum = 0;
    for ($i = $A; $i < $B; $i++) {
        $sum += $i;
    }

    return $sum;
}

$obj = new Test($r = 'frad');
$obj->id = 1;
$obj->setAge(5);
$obj->setName("fofan");
//var_dump($obj);
$var = new Test("dols");
$var->setName("kirilfofan");
$var->setAge(5);
$var->parents = "ale";
$var->getId(2);
var_dump($var);
$x = $var->getSurname();
var_dump($x);
$buffer = new Test();
$buffer->setId(3);
$buffer->parents = 3;
$buffer->setName("trolic");
var_dump($buffer);
$A = 5;
$B = 10;
$result = SumRange($A, $B);
//var_dump($result);