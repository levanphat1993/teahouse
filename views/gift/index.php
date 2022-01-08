<p>This is gift page<p>

    <br />
<form role="form" id="employee" action="<? echo URL ?>gift/insert" method="post">
    <label>Name:</label><input type="text" name="name" /> <br />
    <label>Quantily:</label><input type="int" name="quantily" /> <br />
    <input type="submit" value="submit" />
</form>
<hr />
<table id="employee" >
    <thead>
    <tr>
        <th>Name</th>
        <th>Quantily</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <? foreach ($this->data as $data) { ?>
        <tr>
            <td><? echo $data['name']; ?></td>
            <td><? echo $data['quantily']; ?></td>
            <td><? echo $data['create_at']; ?></td>
            <td><? echo $data['update_at']; ?></td>
        </tr>
    <? } ?>

</table>
