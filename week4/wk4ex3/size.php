<html>
    <head><title>Select a size</title></head>
        <body>
            <?php 
            session_start();
            $_SESSION['selqty'] = $_POST['selqty'];
            ?>
            <form action="selectcolour.php" method="post">
                Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
                <select name="selsize">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>Extra Large</option>
                </select>
                <br/><br/>
                <input type="submit" value="Next"/>
            </form>
            <br/><br/>   
        </body>
</html>