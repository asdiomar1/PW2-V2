<!--<div class="well well-small">
<ul class="nav nav-list">
<?php
        $fp = fopen('inc/files/products.json','r');
        $pJson = fread($fp,filesize('inc/files/products.json'));
        fclose($fp);
        $mArray = json_decode($pJson,true);
        foreach($mArray as $mejores){ 
    ?>
        <a href="productos.php?per=<?php echo $mejores['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
         <span class="icon-chevron-right"></span><?php echo $per['nombre']?>

         <?php }?>
		

        </ul>
    </div>
    -->