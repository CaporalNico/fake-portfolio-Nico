<?php
include 'header.php';
include 'data.php';
?>

<img alt="profil" src=" <?php echo $user["url"]?>" class="mx-auto object-cover rounded-full h-96 w-96 "/>
<h1 class="font-sans text-center mt-3 text-6xl"> <?php echo $user["name"]?> </h1>
<h1 class="font-sans text-center mt-2 text-6xl"> - </h1>
<h1 class="font-sans text-center mt-2 text-4xl"> <?php echo $user["job"]?></h1>

<?php
include 'formation.php';
?>

<?php
include 'passion.php';
?>

<?php
include 'footer.php';
?>
