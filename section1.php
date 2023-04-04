<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require('Auto.php'); ?>
    <tablle>
    <?php include('header.php')?>
    <?php include('nav.php')?>
    <section>
        <h1>AAA</h1>
        <?php 
            
            $nizAutomobila=[
                new Auto('C3',1998,'Citroen'),
                new Auto('206',1996,'Peugeot'),
                new Auto('X6',1992,'BMW'),
                new Auto('911',1994,'Ferarri'),
            ];

            function ispis($nizAutomobila){
            foreach($nizAutomobila as $auto){
                    echo '<div><ul>
                    <li>'.$auto->getMarka() .'</li>
                    <li>'.$auto->getGodiste() .'</li>
                    <li>'.$auto->getProizvodjac() .'</li>
                    </ul>' .'</div>';
                }
            }

            ispis($nizAutomobila);

            function swap(&$a, &$b) {
                $pom=$a;
                $a=$b;
                $b=$pom;
            }

            function sortt(&$nizAutomobila){
                for($i=0;$i<count($nizAutomobila)-1;$i++)
                    for($j=$i+1;$j<count($nizAutomobila);$j++)
                        if($nizAutomobila[$i]->getGodiste() > $nizAutomobila[$j]->getGodiste())
                            swap($nizAutomobila[$i],$nizAutomobila[$j]);
            }

            sortt($nizAutomobila);
            echo '/sortiran/';
            ispis($nizAutomobila);

            //najstariji automobil
            echo 'Najstariji auto je proizveden '.$nizAutomobila[0]->oldestAuto($nizAutomobila)->getGodiste().' godine.';
        ?>
    </section>
    <?php include('footer.php')?>
    </table>
</body>
<style>
</style>
</html>