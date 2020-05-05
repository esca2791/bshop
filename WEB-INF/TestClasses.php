<?php

class TestClasses {

public function NotStatic() {
	echo "<h2>NotStatic</h2>Calling static now...";
	TestClasses::StaticFunction();
}

public static function StaticFunction() {
	echo "<h2>Static</h2>";
}

public function ExtraFunction() {
	echo "<h2>Extra</h2>";
	TestClasses::NotStatic();
}

}

$tcs = new TestClasses();
$tcs->NotStatic();

echo "Independent...";

?>