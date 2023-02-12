<?php 
	class ArraysEx
	{		
		public $heading;

		function __construct($heading) {
		    $this->heading = $heading;
		    echo "<h1>{$this->heading}</h1>";
		  }

		public function ex1()
		{
			echo "<h2>Example 1:</h2>";
			$variable = [ 'rav' => 'abc','abc','abc', 'xyz'=> 'abc','abc','abc','abc','abc','abc','abc','abc'];
			echo "<table><tr><th>Key</th><th>Value</th></tr>";
			foreach ($variable as $key => $value) {
				echo "<tr><td>$key</td><td>$value</td></tr>";
			}
			echo "</table>";
		}

		public function ex2()
		{
			echo "<h2>Example 2:</h2>";
			$people = array('rav' => 'a','b','c', 'xyz'=> 'd','e','f','g','h','i','j','k');

			echo "<pre>";
			print_r($people );
			echo "</pre>";

			if (in_array("a", $people))
			  {
			  echo "<p>Value " . $people['rav']. " found in array()</p>";
			  }
			else
			  {
			  echo "Match not found";
			  }


			  if (array_key_exists("xyz", $people))
			    {
			    echo "<p>Key " . "xyz". " exists in array()</p>";
			    }
			  else
			    {
			    echo "Match not found";
			    }
		}

		public function ex3()
		{
			echo "<h2>Example 3:</h2>";
				$array = array(
				    "foo" => "bar",
				    "bar" => "foo",
				);

				echo "<pre>";
				print_r($array);
				echo "</pre>";			
		}

		public function ex4()
		{
			echo "<h2>Example 4:</h2>";
				$array = array(
				    "foo" => "bar",
				        "bar" => "foo",
				        'abc'   => array('web' => array('developmnet' => 'work' ) ),
				        -100  => 100,
				);

				echo "<pre>";
				print_r($array);
				echo "</pre>";

				foreach ($array as $key => $value) {
					 
					 if ($key == 'abc') {
					 	print_r($value);
					 }
				}

				echo $array['abc']['web']['developmnet'];
				
		}

		public function ex5()
		{

			echo "<h2>Example 5:</h2>";
			$cars = array(
							  array("Volvo",22,18),
							  array("BMW",15,13),
							  array("Saab",5,2),
							  array("Land Rover",17,15)
							);


						  	echo "<pre>";
						  	print_r($cars);
						  	echo "</pre>";

							foreach ($cars as $key => $value) {
						  		echo $value[0] . " " . $value[1] . " " . $value[2] . "<br>";
						  		 
							}
		}

		function __destruct() {
		    echo "Thanks for wathing {$this->heading}.";
		  }

	}	

	$array_ex = new ArraysEx("<!--Programs on Array with OOPs-->");

	$array_ex->ex1();
	$array_ex->ex2();
	$array_ex->ex3();
	$array_ex->ex4();
	$array_ex->ex5();

	/*foreach ($array_ex as $key => $value) {
		echo $value . " ";
	}*/
?>