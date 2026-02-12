<?php
include 'database.php';

$sql = "SELECT * FROM cards"; // SQL query om alle pokemon uit de database te halen
$result = mysqli_query($conn, $sql);

$cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!-- Pokemon Grid -->
<div class="max-w-7xl mx-auto px-8 py-12">
    <h2 class="text-3xl font-bold mb-8">Mijn Favoriete Pokémon</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($cards as $card): ?>
            <!-- Pokemon Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <?php $pokemon_default_url = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/"; ?>
                <img src="<?php echo $pokemon_default_url . $card['pokedex_number']; ?>.png"
                    alt="<?php echo $card['description']; ?>" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2"><?php echo $card["name"]; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $card["description"]; ?></p>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Meer informatie →</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>