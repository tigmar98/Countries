<?php

	require  'vendor/autoload.php';

	use SameerShelavale\PhpCountriesArray\CountriesArray;

	$countries = CountriesArray::get();
	//print_r($countries);
	foreach ($countries as $key => $value) {
		echo $value.'<br>';
	}
?>

