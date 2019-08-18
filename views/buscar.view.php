<?php require 'header.php'; ?>

    <!--
    |------------------------------------------------------------------------------------------
    |  POSTS
    |------------------------------------------------------------------------------------------
    |
    | Esta estructura se repetira por cada Post que encuentre.
    | 
    -->

    <div class="contenedor">
        <h2><?php echo $titulo; ?></h2>
        <?php foreach($resultados AS $post): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto']; ?></p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Leer mas...</a>
                </article>
            </div>
        <?php endforeach; ?>
        

       
       

        <?php require 'paginacion.php'; ?>
    </div>

    <?php require 'footer.php'; ?>
</body>
</html>