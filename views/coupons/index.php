<p>This is coupons page<p>
    <br />
<form role="form" id="employee" action="<? echo URL ?>coupons/insert" method="post">
    <label for="store_id" > Choose a stores:</label>
    <select  name="store_id" id="store_id">
        <? foreach ($this->stores as $store){ ?>
            <option value="<? echo $store['id'] ?>"><? echo $store['name'] ?></option>
        <? } ?>
    </select>
    <br />
    <input type="submit" value="submit" />
</form>
<hr />
<table id="coupons" >
<thead>
<tr>
    <th>Store Name</th>
    <th>Code</th>
    <th>Create At</th>
    <th>Update At</th>
</tr>
</thead>
<? foreach ($this->data as $data) { ?>
    <tr>
        <td><? echo $data['store_name']; ?></td>
        <td><? echo $data['code']; ?></td>
        <td><? echo $data['create_at']; ?></td>
        <td><? echo $data['update_at']; ?></td>
    </tr>
<? } ?>
</table>