

<?php
require_once "./config.php";

$select_qry = "SELECT * FROM users";
$result = mysqli_query($db_con, $select_qry);

$html = "<table class='table table-striped'>";
$html .= "<thead>";
$html .= "<tr>";
$html .= "<th>ID</th>";
$html .= "<th>Fist Name</th>";
$html .= "<th>Last Name</th>";
$html .= "<th>Actions</th>";
$html .= "</tr>";
$html .= "</thead>";


$html .= "<tbody>";

while($row = mysqli_fetch_assoc($result)){

$html .= "<tr>";
$html .= "<td>$row[id]</td>";
$html .= "<td>$row[fname]</td>";
$html .= "<td>$row[lname]</td>";
$html .= "<td><button class='btn btn-warning btn-sm me-2'>Edit</button><button class='btn btn-danger btn-sm'>Delete</button></td>";
$html .= "</tr>";
}
$html .= "</tbody></table>";

echo $html;
exit;
?>