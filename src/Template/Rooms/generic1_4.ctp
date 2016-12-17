<?php
    $this->Game->spendTime();
    $this->Game->clearRoom();
    $races = [
        'Elven',
        'Orcish',
        'Dwarvish',
        'Vampire',
        'Hobbit',
        'Lycanthrope',
        'Gnomish',
        'Human',
        'Troll',
        'Midget',
        'Giant',
        'Undead',
        'Saiyajin',
        'Namekseijin',
        'Pusher Robot',
        'Shover Robot',
        '5-Year Old',
        'Smurf',
        'Plaid',
        'Leprechaun',
        'Norn',
        'Ettin',
        'Grendel',
        'Narcoleptic'
    ];
    $alignments = ['Lawful', 'Neutral', 'Chaotic'];
    $roles = [
        'Warrior',
        'Mage',
        'Ranger',
        'Rogue',
        'Tourist',
        'Thief',
        'Cleric',
        'Paladin',
        'Archeologist',
        'Monk',
        'Samurai',
        'Ninja',
        'Healer',
        'Valkyrie',
        'Amazon',
        'Necromancer',
        'Jedi',
        'Trash Collector',
        'Lunchlady',
        'Substitute Teacher',
        'Hacker',
        'Pirate',
        'Shriner',
        'Freshman'
    ];
    $weapons = [
        'a katana',
        'Stormbringer',
        'the Vorpal Blade',
        'a flak cannon',
        'Excalibur',
        'a phaser',
        'a lightsaber',
        'a set of ninja stars',
        'a warhammer',
        'a nine-iron',
        'a sack full of kittens',
        'a broadsword',
        'a short sword',
        'a pair of daggers',
        'a magical wand of some sort',
        'a Holy Pancake',
        'The Holy Hand Grenade of Antioch',
        'a platinum spork',
        'a Heisenberg compensator',
        'a surly rhombus',
        'a minigun',
        'a pocket ion cannon',
        'a double-lightsaber',
        'a bow and quiver of arrows',
        'a crossbow',
        'a pirate cannon',
        'a set of brass knuckles',
        'Tapion\'s sword',
        'a black pistol with the phrase "Hellsing Family" engraved on it',
        'a futuristic pistol called The Spaminator',
        'a shard of kryptonite',
        'a thermal detonator',
        'a whoopee cushion',
        'a sock full of quarters',
        'an expired carton of milk',
        'a radioactive Ho - Ho',
        'a Shaft of Belated Quiessence',
        'a wooden stake',
        'a rusty spoon',
        'a Whomping Stick',
        'the color plaid',
        'the wit of Tom Servo',
        'an edible wig',
        'a football helmet full of tofu'
    ];
    $race = $races[array_rand($races)];
    $alignment = $alignments[array_rand($alignments)];
    $role = $roles[array_rand($roles)];
    $weapon = $weapons[array_rand($weapons)];
?>
<p>
    You walk into the room to find that you've been transformed into 
    <strong>
        a <?= "$alignment $race $role with $weapon" ?>
    </strong>
    as your weapon. A booming voice calls out from nowhere for you to retrieve the Amulet of Yendor. Frightened and
    confused, you drop your weapon and run out of the room, wherein you return to your normal form.
</p>
<?= $this->Game->hallwayLink() ?>
