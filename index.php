<!DOCTYPE html>
<html>
    <head>
        <title>Claude Monet</title>
        <meta charset="UTF-8">
        <meta name="author" value="Marin">
        <link href="početna.css" rel="stylesheet">
    </head>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    ?>
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
             <div id="saStrane">
                 <img src="Slike/ClaudeMonet.jpg" width="100%" height="300px">
                 <ul>
                    <li>Ime: Claude Oscar Monet</li>
                    <li>Rođen: 1840 - Paris</li>
                    <li>Preminuo: 1926 - Giverny</li>
                    <li>Aktivan: 1865 - 1926</li>
                    <li>Poznat kao: Slikar</li>
                    <li>Djelovao tijekom impresionizma</li>
                 </ul>
              </div>
             <div id="osnovno">
                <h2>O čovjeku iza djela</h2>
                <p>Claude Monet je najdosljedniji francuski slikar impresionizma. U svojoj petoj godini s obitelji seli iz Pariza u Le Havre gdje je i naučio slikati. Slikao je portrete svoje obitelji i lokalnih prizora te portrete stanovnika La Havrea. 
                    Kao mladić, Monet je susreo Eugenea Boudina. Boudin je slikao na otvorenom i nagovarao Moneta da čini to isto. Monet je uživao u tom iskustvu i shvatio da želi biti umjetnik.je 1874. sa skupinom od 29 drugih umjetnika postavio njihovu vlastitu izložbu. Mnoge slike bila su malena platna naslikana na otvorenom. 
                    Umjetnici su koristili slobodne pokrete kistom i mnogo grudica čiste boje - obilježja onoga što danas nazivamo impresionističkim stilom. Isprva su ljudi mislili da te slike izgledaju nedovršeno, no danas pripadaju najpoznatijim slikama na svijetu. 
                    Po njegovoj slici "Utisak", odnosno prema francuskom nazivu izvornika "Impression, soleil levant", je i čitav pravac, impresionizam, dobio ime. Pored "Impresije" ili "Zalaska sunca", naslikao je i "Rađanje sunca". Monet je u početku slikao figuralne slike, a kasnije i prave krajobraze. Znao je isti motiv slikati više puta, čineći cijele serije, primjerice "Pročelja Rouenske katedrale". </p>
             </div>
             <div id="vrtovi">
                <h2>Monetov vrt</h2>
                <p>Claude Monetov vrt u Givernyju jedan je od najpoznatijih vrtova na svijetu i ključna inspiracija za mnoge njegove slavne slike. Smješten u Normandiji, vrt je podijeljen u dva dijela: cvjetni vrt ispred kuće i japanski vodeni vrt s karakterističnim mostom i lokvanjima. Monet je pažljivo planirao i održavao vrt, kreirajući slikovite prizore koji su mu omogućili da istraži igre svjetla i boja. Njegove slike vodenih ljiljana i mosta postale su ikonične, a vrt u Givernyju danas privlači mnoge posjetitelje koji žele osjetiti ljepotu i mir koje je Monet ovjekovječio na svojim platnima.</p>
             </div>
             <div id="slikeVrta">
                <img src="Slike/MonetVrt3.jpg" width="45%;" height="180px;" style="float:left;margin-top:20px">
                <img src="Slike/MonetVrt2.jpg" width="45%" height="180px;" style="float:right;margin:-40px 15px 0 10px;">
                <img src="Slike/MonetVrt1.jpg" width="70%" height="250px" style="float:right; margin:50px 70px 0 0 "
             </div>
            </div>
            <?php 
                $xml = simplexml_load_file('djelaImpresionista.xml');
            ?>
            <table>
                <tr>
                    <th></th>
                    <th>Slika</th>
                    <th>Slikar</th>
                    <th>Godina</th>
                    <th>Muzej</th>
                </tr>
                <?php 
                    foreach($xml->Djelo as $djelo):
                ?>
                <tr>
                    <td><?php echo "<img src='$djelo->Slika'>"?></td>
                    <td><?php echo $djelo->Naslov?></td>
                    <td><?php echo $djelo->Slikar?></td>
                    <td><?php echo $djelo->Godina?></td>
                    <td><?php echo $djelo->Muzej?></td>
                </tr>
                <?php endforeach; ?>
            </table>
             <div id="Impresionizam">
                <h2>Impresionizam</h2>
                <p>Impresionizam je umjetnički pokret koji je nastao u Francuskoj krajem 19. stoljeća. Karakterizira ga fokus na prikazivanje trenutnih dojmova svjetlosti i boje, često kroz slike prirodnih pejzaža i svakodnevnih scena. Umjetnici su koristili brze, kratke poteze kistom i vibrantne boje kako bi uhvatili prolazne efekte svjetlosti.

                    Claude Monet, jedan od osnivača impresionizma, imao je ključan utjecaj na ovaj pokret. Njegovo djelo "Impresija, izlazak sunca" iz 1872. godine dalo je naziv cijelom pokretu. Monet je bio poznat po svojim serijama slika istih motiva u različitim uvjetima svjetlosti, poput njegovih "Lokvanja". Njegova sposobnost da prikaže suptilne promjene u atmosferi i svjetlu revolucionirala je umjetnost i postavila temelje za daljnji razvoj modernog slikarstva.</p>
             </div>
        </main>
        <footer>
            <p>Marin Kelez, 2024.</p>
        </footer>
    </body>
</html>