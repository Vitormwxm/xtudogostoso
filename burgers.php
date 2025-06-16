<?php 
    include_once ("templates/header.php");
?>

<?php 
    if(isset($_GET["id"])) {
        // está pegando o id do hamburguer que vem de outra página e passa para essa
        $burgersId = $_GET["id"];
        // variável declarada
        $currentBurguer;

        // faz um foreach em burgers, que é onde está sendo passado os dados, lembrando que nosso header tem include para esses dados. 
        foreach($burgers as $burger) {
            // se o hamburguer é o mesmo passado pela url, se for vai colocar o array de $burger dentro de $currentBurguer
            if($burger["id"] == $burgersId) {
                $currentBurguer = $burger;
            }
        };
    }

?>
<main>
    <div class="background">

    </div> 
    
    <div class="item">
            <h1 class="titulos"><?= $currentBurguer["title"]?> </h1>
            
            <div class="ingredientes itens">
                <h2 class="subtitle">Ingredientes</h2>
                <ul>
                    <?php foreach ($currentBurguer["recipe"] as $ricepe): ?>
                        <li><?= $ricepe ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>  

            <h2 class="titulos">Descrição</h1>
            <div class="ingredientes">
                <p>
                    <?= $currentBurguer["description"]?>
                </p>
            </div>

</main>


<?php 
    include_once ("templates/footer.php");
?>