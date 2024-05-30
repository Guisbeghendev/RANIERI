<!--navbar-->
<nav class="w3-container navbar w3-panel">
    <!-- Menu principal -->
    <div class="w3-bar w3-black">
        <a href="<?php echo app_url(); ?>" class="w3-bar-item w3-button <?php if ($current_page == 'index') echo 'w3-black'; ?> w3-hover-ranilaranja1">Inicial</a>
        <a href="<?php echo app_url('app_historia/index.php'); ?>" class="w3-bar-item w3-button <?php if ($current_page == 'app_historia/index') echo 'w3-black'; ?> w3-hover-ranilaranja1">História</a>
        <!-- Botão de menu para telas pequenas -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium w3-hover-deep-orange" onclick="toggleMenu()">☰</a>
    </div>
    <!-- Menu para telas pequenas -->
    <div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
        <a href="<?php echo app_url(); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Inicial</a>
        <a href="<?php echo app_url('app_historia/index.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">História</a>
    </div>
</nav>
<!--fim navbar-->

<script>
    function toggleMenu() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
