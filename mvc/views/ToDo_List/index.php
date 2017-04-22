<html>
<head>
<h1>ToDo list!</h1><br />
<br />
<script src="todo_list.js"></script>
</head>
<body>
<p id="listInserts" border="2" style="width:100%">
    <script>showList();</script>
</p>
<form id="randomInsert" action="todo_list.js" method="post">
    <h2>Create a new mission</h2><br />
    <label>Description</label> <input id ="text" type="text" name="text" required/><br />
    <label>Deadline </label><input type="datetime-local" name="deadline" /><br />
    <input type="submit" value="Create" onclick="" />
</form>
<br/>

</body>
</html>
