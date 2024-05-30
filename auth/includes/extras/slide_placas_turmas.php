<!--slide placa turmas-->
<div class="w3-row extras w3-centered w3-black w3-show">
    <div class="w3-content slideTurmas w3-white w3-display-container w3-centered" style="max-width:600px">
        <!--imagens-->
        <br><br>
        <img class="mySlides w3-animate-fading" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/1A.jpg" style="width:100%">
        <img class="mySlides w3-animate-top" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/1B.jpg" style="width:100%">
        <img class="mySlides w3-animate-bottom" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/2A.jpg" style="width:100%">
        <img class="mySlides w3-animate-left" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/2B.jpg" style="width:100%">
        <img class="mySlides w3-animate-right" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/3A.jpg" style="width:100%">
        <img class="mySlides w3-animate-opacity" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/3B.jpg" style="width:100%">
        <img class="mySlides mySlides w3-animate-fading" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/4A.jpg" style="width:100%">
        <img class="mySlides w3-animate-top" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/4B.jpg" style="width:100%">
        <img class="mySlides w3-animate-left" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/5A.jpg" style="width:100%">
        <img class="mySlides" src="<?php echo IMAGES_URL; ?>/slide_placas_turmas_2024/5B.jpg" style="width:100%">
        <img class="mySlides w3-spin w3-white" src="<?php echo IMAGES_URL; ?>/logo/prof_ranieri.png" style="width:100%">
        <br><br>
        <!--fim imagens-->

        <!--botoes voltar/avançar-->
        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        <!--fim botoes voltar/avançar-->
    </div>
</div>
<!--fim slide placa turmas-->

<!--script para controle manual-->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
    }
</script>
<!--fim script para controle manual-->

<!--script para controle automatico-->
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
<!--fim script para controle automatico-->
