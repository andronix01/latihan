<!DOCTYPE html>
<html>
<head><title>Soal IT Select</title></head>
<body>
    <h1>Form Vehicle</h1>
    <form action="" method="post">
        <div class="row">
            <label>Type of Vehicle</label>
            <select name="item">
                <?php $options = array('Cars', 'Trucks', 'Buses', 'Motorbikes', 'Bicycles', 'Boats', 'Airplane');
                foreach ($options as $item) {
                    $selected = @$_POST['item'] == $item ? ' selected="selected"' : '';
                    echo '<option value="' . $item . '"' . $selected . '>' . $item . '</option>';
                }?>
            <input type="submit" name="submit" value="Submit"/>
            </select>
        </div>
        <!-- <div class="row">
            <input type="submit" name="submit" value="Submit"/>
        </div> -->
    </form>
    <?php
    if (isset($_POST['submit'])) {
        echo '<h1>Result</h1>';
        // echo '<ul>';
        echo 'Type of Vehicle: '. '<strong>' . $_POST['item'] . '</strong>';
        // echo '</ul>';
    }?>
</body>
</html>
