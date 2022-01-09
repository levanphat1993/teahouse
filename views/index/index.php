Index .. no login  in only..

<br />
<form id="search" action="<? echo URL ?>index/search" method="post">
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
<table id="search" >
    <thead>
    <tr>
        <th>Code</th>
    </tr>
    </thead>
    <? if(isset($this->data)) { ?>
    <? foreach ($this->data as $data) { ?>
        <tr>
            <td><? echo $data['code']; ?></td>
        </tr>
    <? }} ?>
</table>
<hr />
<form name="run" action="<? echo URL ?>index/xhrRun" method="post">
    <br />
    <label for="code" > Choose a code:</label>
    <input type="text" name="code" />
    <br />
    <input type="submit" id="run" value="submit" />
</form>

