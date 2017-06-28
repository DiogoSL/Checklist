<?php

require_once '../lib/setup.php';

$collection = [
    'fruits' => ['apple'],
];

$collection['fruits'][] = 'bannana';

$drinks = ['cola', 'beer'];

$collection['drinks'] = $drinks;

$properties = [
    'name'     => 'Diogo',
    'Last Name' => 'Lopes',
    'age'      => '14',
];
?>

<p>This is <?php echo $properties['name']; ?></p>
<ul>
    <?php foreach($properties as $key => $value): ?>
        <li> <?php echo $key; ?>: <?php echo $value; ?> </li>
    <?php endforeach ?>
</ul>


<ul>
    <?php foreach($collection['fruits'] as $fruit): ?>
        <li> <?php echo $fruit; ?> </li>
    <?php endforeach ?>
</ul>
