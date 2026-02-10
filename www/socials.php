<?php
$socials = [
    'Instagram' => 'https://instagram.com/',
    'Facebook' => 'https://facebook.com/',
    'Twitter' => 'https://twitter.com/'
];
?>
<div class="bg-white shadow p-4 flex justify-center space-x-6 mb-6" style="list-style: none;">
    <ul style="display: flex; flex-direction: column;">
        <?php foreach ($socials as $key => $value): ?>
            <li>
                <a href="<?php echo $value; ?>" class="text-white-300 hover:text-red-300">
                    <?php echo $key; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
</div>