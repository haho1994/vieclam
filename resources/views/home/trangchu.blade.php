<html>
    <head></head>
    <body>
        <p>Hello world</p>
        <p>Hello world</p>
        <p>Hello world</p>
        <p>Hello world</p>
        <p>Hello world</p>
        <?php
        
        echo $danhmucId->name;
        
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        
        foreach ($danhmuc as $giatri) {
            echo "Name:" . $giatri->name . "<br/>";
            echo 'Mota: ' . $giatri->description . "<br/>";
        }
        
        ?>
        <?php echo $vidu; ?>
    </body>
</html>
