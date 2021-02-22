<?php
include 'data.php';
?>

<h1 class="font-sans text-left mt-60 mb-5 ml-6 text-4xl text-center">Passions</h1>
<?php   
    foreach($passion as $pas){
?>   
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8"> 
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6  shadow-lg rounded-lg dark:bg-gray-800">
            <h3 class="text-2xl text-gray-500 font-semibold dark:text-white py-4">
                <?php echo $pas["title"]?>
            </h3>
            <p class="text-md  text-gray-500 dark:text-gray-300 py-4">
                <?php echo $pas["description"]?>
        </div>
        </div>
    <?php    
    }    
    ?>
   