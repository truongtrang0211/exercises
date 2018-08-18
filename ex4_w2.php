<!DOCTYPE html>
<html>
<head>
	<title>page manage</title>
	<style type="text/css">
		
	</style>
<h1 align="center"> Question Table </h1>
<style type="text/css">
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	.add{
		height: 70px;
		width: 220px;
		font-size: 0.8em;
			color: black;
			background-color: yellow;
			 color: white;
			 box-shadow: 5px 5px grey;

}
.add a{
				 text-decoration: none;
}
</style>
</head>
<body>
 <form class="qustable" action="ex4_w2.php" method ="_POST">


 	<h2 align="center"><button class="add"><a href="add_w2.php">Add more questions</a></button></h2>
 	<table align="center" border="1px" cellspacing="0px" width="50%">
    <tr>
        <th rowspan="2">Question</th>
        <th rowspan="2">Answer</th>
        <th colspan="2">Modify</th>
    </tr>
    <tr>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td align="center">Question 1</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 2</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 3</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 4</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 5</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 6</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 7</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 8</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
<tr>
        <td align="center">Question 9</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>
    <tr>
        <td align="center">Question 10</td>
        <td align="center">A</td>
        <td align="center"><button><a href="quiz_w2.php">Edit</a></button></td>
        <td align="center"><button><a href="quiz_w2.php">Delete</a></button></td>
    </tr>

 	</table>
</body>
</html>