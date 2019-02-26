<?php


?>
<html>

<select name="month" size='1'>
    <?php
    for ($i = 0; $i < 12; $i++) {
        $time = strtotime(sprintf('%d months', $i));   
        $label = date('F', $time);   
        $value = date('n', $time);
        echo "<option value='$value'>$label</option>";
    }
    ?>
</select>
</html>