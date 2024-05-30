<!-- navegação historia --
<div class="w3-center">
    <div class="w3-bar">
        <a href="#" class="w3-button w3-black">&laquo;</a>
        <a href="index_historia.php" class="w3-button">1</a>
        <a href="index_historia2.php" class="w3-button">2</a>
        <a href="index_historia3.php" class="w3-button">3</a>
        <a href="index_historia4.php" class="w3-button">4</a>
        <a href="index_historia5.php" class="w3-button">5</a>
        <a href="index_historia6.php" class="w3-button">6</a>
        <a href="#" class="w3-button w3-black">&raquo;</a>
    </div>
</div>
!-- fim naveg hist-->


<?php
// Identifica a página atual
$current_page = basename($_SERVER['PHP_SELF'], ".php");

// Define a quantidade total de páginas
$total_pages = 6;

// Mapeamento das páginas
$page_mapping = array(
    1 => 'index.php',
    2 => 'index1.php',
    3 => 'index2.php',
    4 => 'index3.php',
    5 => 'index4.php',
    6 => 'index5.php'
);
?>

<!-- navegação historia -->
<div class="w3-container naveghist w3-center">
    <div class="w3-bar naveghist w3-show">
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <a href="<?php echo $page_mapping[$i]; ?>" class="w3-button <?php
                if ($current_page == 'index'.($i-1)) echo 'w3-black';
                else echo 'w3-white';
            ?>" style="background-color: <?php
                if ($current_page == 'index'.($i-1)) echo 'black';
                else echo 'white';
            ?>" onmouseover="this.style.backgroundColor='<?php echo ($current_page == 'index'.($i-1)) ? 'black' : '#cd862a'; ?>'; this.style.color='<?php echo ($current_page == 'index'.($i-1)) ? 'white' : 'black'; ?>'" onmouseout="this.style.backgroundColor='<?php echo ($current_page == 'index'.($i-1)) ? 'black' : 'white'; ?>'; this.style.color='<?php echo ($current_page == 'index'.($i-1)) ? 'white' : 'black'; ?>'"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</div>
<!-- fim naveg hist-->



