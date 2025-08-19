<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "Deepa Sahoo") {
      $prefix = "Mrs.";
    } elseif ($name == "Deepansh kar") {
      $prefix = "Mr.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Deepa Sahoo");
echo "<br>"; 
echo $class->prefixName("Deepansh kar");
?>
 
</body>
</html>
