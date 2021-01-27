 <?php class Person {
function __construct($name)
{
$this->name = $name;
}
function getName()
{
return $this->name;
}
private $name;
};
$judy = new Person("Judy") . "\n";
$joe = new Person("Joe") . "\n";
print $judy->getName();
print $joe->getName(); ?>