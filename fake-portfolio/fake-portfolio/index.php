<?php
include 'header.php';
?>
<?php
include 'data.php';
?>
<img alt="profil" src="https://images.unsplash.com/photo-1474978528675-4a50a4508dc3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="mx-auto object-cover rounded-full h-96 w-96 "/>
<h1 class="font-sans text-center mt-3 text-6xl"> <?php echo $user["name"]; ?> </h1>
<h1 class="font-sans text-center mt-2 text-6xl"> - </h1>
<h1 class="font-sans text-center mt-2 text-4xl">Développeuse / Photographe</h1>

<?php
include 'formation.php';
?>

<?php
include 'passion.php';
?>

<?php
include 'footer.php';
?>
