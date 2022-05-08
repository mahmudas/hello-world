<?php include('database new.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>My To-Do List</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1 style="text-align: center"><b>To-do List</b></h1>
     <table style="border:1px solid blackß;margin-left:auto; margin-right:auto;" width='auto' border=1>
<tbody>
    <?php while ($row = mysqli_fetch_array($results)){ ?>
		<tr>
            <td> <a href ="database new.php?del=<?php echo $row['id']; ?>" onClick="return checkdelete()"><button> Delete </button></a></td>
			<td> <?php echo $row['prio']; ?> </td>
            <td> <?php echo $row['task']; ?> </td>
<?php 

    } ?>


</tr>
</tbody>
</table>
<br><br>
<h3 style="text-align: center"><b>New To-do</b></h3>
	<form method="post" action="database new.php"  style="text-align: center">
		<div class="task">
			<label>Details:    </label>
			<input type="text" name="task" value="" placeholder="Enter your Todo's">
		</div>
		 <div class="task">
			<label>Priority</label>
            <select name="prio" id="prio">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
            </select>
        </div>
		<br>
		
		<div class="task">
			<button class="task_btn" type="submit" name="submit" >Add Todo</button>
		</div>
	</form>
</div>

</body>
</html>