<?php 
    require_once "_header.php";
?>

    <main class="container flex">
        <article>
            <div class="articleContent">
            <h1>Galerie</h1>
            <HR>
            <div class="grid">
                <a data-fancybox="gallery" href="img/gite-1.jpg"><img class="imgGalerie" src="img/gite-1.jpg" alt="gite"></a>
                <a data-fancybox="gallery" href="img/gite-2.jpg"><img class="imgGalerie" src="img/gite-2.jpg" alt="gite"></a>
                <a data-fancybox="gallery" href="img/gite-3.jpg"><img class="imgGalerie" src="img/gite-3.jpg" alt="gite"></a>
                <a data-fancybox="gallery" href="img/jardin-1.jpg"><img class="imgGalerie" src="img/jardin-1.jpg" alt="jardin"></a>
                <a data-fancybox="gallery" href="img/jardin-2.jpg"><img class="imgGalerie" src="img/jardin-2.jpg" alt="jardin"></a>
                <a data-fancybox="gallery" href="img/jardin-3.jpg"><img class="imgGalerie" src="img/jardin-3.jpg" alt="jardin"></a>
                <a data-fancybox="gallery" href="img/potager-1.jpg"><img class="imgGalerie" src="img/potager-1.jpg" alt="potager"></a>
                <a data-fancybox="gallery" href="img/potager-2.jpg"><img class="imgGalerie" src="img/potager-2.jpg" alt="potager"></a>
                <a data-fancybox="gallery" href="img/potager-3.jpg"><img class="imgGalerie" src="img/potager-3.jpg" alt="potager"></a>
            </div>
            </div>
        </article>
        <?php 
            require_once "_aside.php";
        ?>
    </main>
<?php 
    require_once "_footer.php";
?>