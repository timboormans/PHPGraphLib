<?php
require('../phpgraphlib.php');

$graph = new PHPGraphLib(500, 350);

$data = array(
    12124,
    5535,
    43373,
    22223,
    90432,
    23332,
    15544,
    24523,
    32778,
	38878,
    28787,
    33243,
    34832,
    32302
);

$graph->addData($data);
$graph->setTitle('Amount Produced');
$graph->setGradient('#003366', '#336699');

$graph->createGraph();
