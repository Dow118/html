<?php

include './admin_delete_init.php';

while($row = mysqli_fetch_row($result)){

echo "<form action="admin_delete_action.php" method="post">";

echo "<label name="key" value="$row[0]"> $row[0] </label>";
echo "<label> $row[1] </label>";
echo "<label> $row[2] </label>";
echo "<label> $row[3] </label>";
echo "<label> $row[4] </label>";
echo "<label> $row[5] </label>";

echo "<input type="submit" name="delete" value="삭제"/>";
echo "</form>";

echo "<br>";
}

?>
