<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tablle>
    <?php include('header.php')?>
    <?php include('nav.php')?>
    <section>
        <?php 
        global $i;
        for($i;$i<10;$i++){
            echo 
            '<ol>
                <td>rb</td>
                <td>ime</td>
                <td>prezime</td>
            </ol>';
            }
        
        ?>
        
    </section>
    <?php include('footer.php')?>
    </table>
</body>
<style>
</style>
</html>