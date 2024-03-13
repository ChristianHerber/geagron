<?php

require_once 'connection/index.php';

$classList = "SELECT * FROM classes WHERE deleted_at is null";

$result = $conexao->query($classList);

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

        echo "<option value='{$row['id']}'>{$row['name']}</option>";

    endwhile;
endif;