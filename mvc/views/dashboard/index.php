
<h1>ToDo list!</h1><br />
<br />
<link rel="stylesheet" href="<?php echo URL?>public/css/ToDo List.css"/>
<form id="randomInsert" action="<?php echo URL;?>dashboard/xhrInsert/" method="post">
    <h2>Create a new mission</h2><br />
    <label>Description</label> <input id ="text" type="text" name="text" required/><br />
    <label>Deadline </label><input type="datetime-local" name="deadline" /><br />
    <input type="submit" value="Create"/>
</form>
<br/>

<table id="listInserts" border="2" style="width:100%">
    <tr>
        <th>ToDo</th>
        <th>Done</th>
        <th>Created</th>
        <th>Deadline</th>
    </tr>

</table>