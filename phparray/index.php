<?php

$teachers =   array('ingrid','theo','ed');

$number_teachers =count($teachers);
for($i=0;$i<3;$i++){
    echo '<p>' . $teachers[$i] . '</p>';
}

//$teachers[] = 'joey';
array_push($teachers, 'joey', 'jellert', 'horst');
//print_r($teachers);
//var_dump($teachers);

foreach ($teachers as $one_teachers) {
    echo '<p>' . $one_teachers . '</p>';
}

//associative array

$subject = array('ingrid' => 'bap',
                    'ed' => 'fro',
                    'horst' => 'vid');

foreach ($subject as $teacher => $vak) {
    echo '<p>' . $teacher . ' teaches ' . $vak . '</p>';
}

?>

