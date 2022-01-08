<p>This is employee page<p>

<br />
<form role="form" id="employee" action="<? echo URL ?>employee/insert" method="post">
    <label>Name:</label><input type="text" name="name" /> <br />
    <label>Phone:</label><input type="phone" name="phone" /> <br />
    <label>Email:</label><input type="email" name="email" /> <br />
    <input type="submit" value="submit" />
</form>
<hr />
<table id="employee" >
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <? foreach ($this->data as $data) { ?>
        <tr>
            <td><? echo $data['name']; ?></td>
            <td><? echo $data['phone']; ?></td>
            <td><? echo $data['email']; ?></td>
            <td><? echo $data['create_at']; ?></td>
            <td><? echo $data['update_at']; ?></td>
        </tr>
    <? } ?>

</table>
