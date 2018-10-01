 <?php
class Car {
    function Car() {
        $this->model = "VW";
    }
	function brand() {
        $this->brand_name = "BMW";
    }
}

// create an object
$herbie = new Car();

// show object properties
//echo $herbie->brand->brand_name;

print_r($herbie);
?> 