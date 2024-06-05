<!DOCTYPE html>
<html>
    <head>
        <title>Djela</title>
        <meta charset="UTF-8">
        <meta name="author" value="Marin">
        <link href="djela.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="navigacija">
                <h1>Claude Monet</h1>
                <ul>
                    <li><a href=#>Početna</a></li>
                    <li><a href="Djela.php">Djela</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div id="info">
                <h2>Djela</h2>
                <p>Claude Monet, osnivač francuskog impresionizma, poznat je po svojim slikama koje prikazuju promjene svjetlosti i boja u prirodi. Njegova najpoznatija djela uključuju serije "Lokvanji", "Impresija, izlazak sunca", "Katedrala u Rouenu" i "Parlament u Londonu". Njegove slike odlikuju se kratkim potezima kista i vibrantnim bojama, stvarajući dojam trenutnog dojma. Monet je često slikao iste prizore u različitim uvjetima svjetla i godišnjim dobima, istražujući kako se izgled krajolika mijenja tijekom dana i godine. Njegova umjetnost je revolucionirala način na koji se boja i svjetlost prikazuju na platnu.</p>
            </div>
            <?php 
                $xml = simplexml_load_file('djela.xml');
                $brojac = 0;
                foreach($xml->Djelo as $djelo): 
            ?>
            <?php 
                if($brojac == 0 || $brojac % 3 == 0) {
                    echo "<div id=flexRedak>";
                }
            ?>
                <ul>
                    <li><?php echo "<img src='$djelo->Slika' width=60% height=150px/>"?></li>
                    <li><?php echo $djelo->Naslov?></li>
                    <li><?php echo $djelo->Godina?></li>
                    <li><?php echo $djelo->Tehnika?></li>
                    <li><?php echo$djelo->Muzej?></li>
                </ul>
            <?php
                $brojac = $brojac + 1; 
                if($brojac % 3 == 0) {
                    echo "</div>";
                }
            ?>
            <?php endforeach; ?>
        </main>
        <footer>
            <p>Marin Kelez, 2024.</p>
        </footer>
    </body>
</html>