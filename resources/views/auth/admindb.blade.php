<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			background: url("../assets/bg2.png") no-repeat center center fixed !important; 
			background-size: cover;
			background-position: center;
			color: #000;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		table {
			border-collapse: collapse;
			margin-top: 50px;
			width: 80%;
			background-color: #fff;
			border: 2px solid #000;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}

		table th {
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: 1px solid #000;
			font-size: 18px;
		}

		table td {
			padding: 10px;
			border: 1px solid #000;
			font-size: 16px;
			text-align: center;
		}

		table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		table tr:hover {
			background-color: #ddd;
		}

		h1 {
			text-align: center;
			font-size: 36px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<h1>Appointment Overview</h1>
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Date</th>
					<th>Time</th>
					<th>Service</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>John Doe</td>
					<td>May 10, 2023</td>
					<td>2:00 PM</td>
					<td>Haircut</td>
					<td>Confirmed</td>
				</tr>
				<tr>
					<td>Jane Smith</td>
					<td>May 12, 2023</td>
					<td>11:00 AM</td>
					<td>Manicure</td>
					<td>Pending</td>
				</tr>
				<tr>
					<td>Magic johnson</td>
					<td>May 15, 2023</td>
					<td>3:30 PM</td>
					<td>Massage</td>
					<td>Cancelled</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>