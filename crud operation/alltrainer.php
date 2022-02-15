<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
         <th>Number</th>
        <th>Address</th>
        <th>Action</th>
        </thead>
        <tbody>
             
            <tr>
                <td>01 </td>
                <td> Jahid Hasan</td>
                <td>01241525455 </td>
                <td>Cumilla </td>
                <td>
                    <a href="edit.php ">Edit</a>
                    <a href=" delete-inline.php ">Delete</a>
                </td>
            </tr>
         
        </tbody>
    </table>
</div>
</div>
<?php
include 'footer.php';
?>