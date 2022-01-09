<p>This is assignment page<p>

    <br />
<form role="form" id="assignment" action="<? echo URL ?>assignment/insert" method="post">
    <label for="employee_id" > Choose a employee:</label>
    <select  name="employee_id" id="employee_id">
        <? foreach ($this->employees as $employee){ ?>
            <option value="<? echo $employee['id'] ?>"><? echo $employee['name'] ?></option>
        <? } ?>
    </select>
    <br />
    <label for="store_id" > Choose a stores:</label>
    <select name="store_id" id="store_id">
        <? foreach ($this->stores as $store){ ?>
            <option value="<? echo $store['id'] ?>"><? echo $store['name'] ?></option>
        <? } ?>
    </select>
    <br />
    <input type="submit" value="submit" />
</form>
<hr />
<table id="assignment" >
    <thead>
    <tr>
        <th>Employee Name</th>
        <th>Store Name</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <? foreach ($this->data as $data) { ?>
        <tr>
            <td><? echo $data['employee_name']; ?></td>
            <td><? echo $data['store_name']; ?></td>
            <td><? echo $data['create_at']; ?></td>
            <td><? echo $data['update_at']; ?></td>
        </tr>
    <? } ?>
</table>

