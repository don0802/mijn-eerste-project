<?php

$menu = ['test', 'test2', 'test3'];

$menuItems = [
    'home' => '<li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>',
    'about' => '<li><a href="about.php" class="text-gray-300 hover:text-white">Over Ons</a></li>',
    'contact' => '<li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>',
    'service' => '<li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>',
    'socials' => '<li><a href="socials.php" class="text-gray-300 hover:text-white">Socials</a></li>'
];
?>
<?php foreach ($menuItems as $key => $value): ?>
    <?php
    echo $value;
?>
<?php endforeach; ?>

<!-- <ul class="flex space-x-6">
    <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
    <li><a href="about.php" class="text-gray-300 hover:text-white">Over Ons</a></li>
    <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
    <li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>
</ul> -->