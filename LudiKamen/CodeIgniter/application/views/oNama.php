
<h2> o nama</h2>
<p> Ovo je VIEW komponenta</p>
<p>
    <?php echo $tekst;?>
</p>
    
<p>
    <?php echo $drugitekst;?>
</p>


<p>
    <?php
    
    foreach($podaci as $red) {
        ?>
<h2> <?php echo $red->IDKorisnik; ?> </h2>
    <?php
    
    }
    //print_r($podaci);
       
    //echo $podaci;?>
</p>