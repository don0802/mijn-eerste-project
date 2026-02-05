<?php
$menuItems = [
    'home' => '<li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>',
    'about' => '<li><a href="about.php" class="text-gray-300 hover:text-white">Over Ons</a></li>',
    'contact' => '<li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>',
    'service' => '<li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>'
];
?>
<?php foreach ($menuItems as $key => $value): ?>
    <?php
    echo '    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Pokédex</div>';
    echo '<ul class="flex space-x-6">';
    echo $value;
    echo '</ul>';
    echo '</div></nav>'
        ?>
<?php endforeach; ?>

<!-- <ul class="flex space-x-6">
    <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
    <li><a href="about.php" class="text-gray-300 hover:text-white">Over Ons</a></li>
    <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
    <li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>
</ul> -->