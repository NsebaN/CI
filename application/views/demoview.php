<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });

</script>
<h2>Data Records</h2>

<div class="divider"></div>
<br/>
<?php
echo "<table id='datatable' class='display' cellspacing='0' width='100%'>";
$head = "<thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>  </th>
        </tr>
    </thead>";
$foot = "<tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>  </th>
        </tr>
    </tfoot>";
echo $head;
echo $foot;
echo "<tbody>";

foreach ($query as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->id;
    echo "</td><td>";
    echo $row->name;
    echo "</td><td>";
    echo $row->address;
    echo "</td><td>";
    echo $row->phone;
    echo "</td><td>";
    echo $row->email;
    echo "</td><td>";
    
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
