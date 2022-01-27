<!doctype html>
<html lang="en">
	<head>
        	<meta charset="UTF-8">
		<title>Hesam Learning</title>

		<!-- load css file-->
		<link rel="stylesheet" href="../common/styles.css" type="text/css"/>
	</head>
	<body>
		<!-- use css and js-->
		<button>Welcome 1</button>
		<button class="button-red" onclick="welcome()">Welcome 2</button>
		<button class="button-green">Welcome 3</button>
		<button class="button-blue">Welcome 3</button>
		
		<!--load javascript -->
		<script src="../common/common.js"></script>
		<!-- load and use php file -->
		<p>
			<?php 
				include '../common/common.php';
				$arr = array(1,5,4,66,3);
				arrayNicePrint($arr);
			?>
		</p>
		
		<!-- use Table -->
		<table>
			<thead>
				<tr>
					<th>Title 1</th>
					<th>Title 2</th>
				</tr>
			</thead>
			<tr>
				<td>Data1</td>
				<td>Data2</td>
			</tr>
			<tr>
                                <td>Data3</td>
                                <td>Data4</td>
                        </tr>

		</table>

	</body>
</html>

