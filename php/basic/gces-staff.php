<?php 

$gcesStaffs = [
			"academic" => [
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				],
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				],
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
					"subjects" => ["Micro Processor", "Logic Circuit"]
				]
			],
			"non-academic" => [
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
				],
				[
					"name" => "Hari KC",
					"address" => "Kudar",
					"phones" => ["9856011111"],
				],
			]
];

echo count($gcesStaffs["non-academic"]);
echo count($gcesStaffs["academic"]);