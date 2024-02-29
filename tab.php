<?php

$tabAssoc = [
    'name' => 'sellaouti',
    'age' => 41
];

echo $tabAssoc['age'];
//foreach ($tabAssoc as $key => $element) :

//endforeach;

/**
 * CEtte fonction permet d'extraire un tableau a partir 
 * d'un autre en se basant sur le type passé en paramètre
 *
 * @param array $tab : Le tableau en entrée
 * @param string $type: le type recherché
 * @return void
 */
function extractElementFromTabByType(array $tab, string $type)
{
    $verifFunction = "is_$type";
    $result = [];
    if (function_exists($verifFunction)) {
        foreach ($tab as $element) :
            if ($verifFunction($element)) {
                $result[] = $element;
            }
        endforeach;
        var_dump($result);
    } else {
        echo 'le type est erronné';
    }
}

extractElementFromTabByType([1, "abc", "def", 23, 4.4], 'blabla');
