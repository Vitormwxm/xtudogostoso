<?php 
    include_once ("templates/header.php");
?>

<main>
    <div class="background">

    </div>  
    <section id="cardapio">
        <h1> Cardápio </h1>
        
            <div class="cardapio-grid">
                <?php foreach($burgers as $burguer): ?>
                    <a href="">
                        <div class="burguer-card">
                                <div class="burguer-img">
                                    <img src="<?= $BASE_URL ?>/img/<?= $burguer["img"]?>" width="100px" alt="">
                                </div>
                                <div class="burguer-title">
                                    <p><?= $burguer["title"]?></p>
                                </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        
    </div>
    </section>
    
</main>
   
<?php 
    include_once ("templates/footer.php");
?>