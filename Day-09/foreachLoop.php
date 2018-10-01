<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 80%;
		margin: 50px auto;
	}
	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}
	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>



<?php 
$all_persons = [
			array(
				'name' => 'Farjana Rimu',
				'age' => 16,
				'phone' => +8801889966220,
				'gender' => 'Female', 
				'institute' => 'Daffodil International Institute'
				),
			array(
				'name' => 'Sagor Biswas',
				'age' => 12,
				'phone' => +8801889966221,
				'gender' => 'Male', 
				'institute' => 'Daffodil International Institute'
				),
			array(
				'name' => 'Abdus Samad',
				'age' => 18,
				'phone' => +8801889966222,
				'gender' => 'Male', 
				'institute' => 'INNOVATION Information System'
				),
			array(
				'name' => 'Shazahan Kabir Saju',
				'age' => 79,
				'phone' => +8801889966223,
				'gender' => 'Male', 
				'institute' => 'INNOVATION Information System'
				)
		];

		//echo "<pre>";
		//print_r($all_persons);
?>


<table>
	<tr>
		<th>Sl.</th>
		<th>Name</th>
		<th>Age</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Institute</th>
	</tr>

	<?php foreach($all_persons as $index => $single_person) { ?>
		<tr>
			<td><?php echo $index+1; ?></td>
			<td><?php echo $single_person['name']; ?></td>
			<td><?php echo $single_person['age']; ?></td>
			<td><?php echo $single_person['phone']; ?></td>
			<td><?php echo $single_person['gender']; ?></td>
			<td><?php echo $single_person['institute']; ?></td>
		</tr>
	<?php } ?>

</table>