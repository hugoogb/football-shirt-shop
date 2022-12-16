<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $filter = filter_input_array{
        INPUT_POST,
        [
            'filter_data' => FILTER_VALIDATE_BOOLEAN,
        ]
    };

    $filterData = $filter['filter_data'];

    if($filterData){
        $txt = htmlentities(txt, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
}

include __DIR__. '/../view/vw_filter_result.php';


