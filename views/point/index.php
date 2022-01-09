<p>This is point page<p>

    <br />
<form role="form" id="point" action="<? echo URL ?>point/insert" method="post">
    <label for="employee_id" > Choose a employee:</label>
    <select  name="employee_id" id="employee_id">
        <? foreach ($this->employees as $employee){ ?>
            <option value="<? echo $employee['id'] ?>"><? echo $employee['name'] ?></option>
        <? } ?>
    </select>
    <br />
    <label>Fulfillment:</label><input type="int" name="fulfillment" /> <br />
    <input type="submit" value="submit" />
</form>
<hr />

<table id="point" >
    <thead>
    <tr>
        <th>Employee Name</th>
        <th>Point</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <? foreach ($this->data as $data) { ?>
        <tr>
            <td><? echo $data['employee_name']; ?></td>
            <td><? echo $data['point']; ?></td>
            <td><? echo $data['create_at']; ?></td>
            <td><? echo $data['update_at']; ?></td>
        </tr>
    <? } ?>
</table>