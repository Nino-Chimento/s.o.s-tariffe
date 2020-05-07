<?php
$stores = [
    0 =>
    array(
        'id' => 1,
        'name' => 'Pisa',
        'distance' => 5,
        'items' =>
        array(
            0 =>
            array(
                'id' => 1,
                'qty' => 15,
                'minQty' => 10,
            ),
            1 =>
            array(
                'id' => 2,
                'qty' => 5,
                'minQty' => 7,
            ),
            2 =>
            array(
                'id' => 5,
                'qty' => 11,
                'minQty' => 20,
            ),
        ),
    ),
    1 =>
    array(
        'id' => 2,
        'name' => 'Milano',
        'distance' => 20,
        'items' =>
        array(
            0 =>
            array(
                'id' => 2,
                'qty' => 5,
                'minQty' => 10,
            ),
            1 =>
            array(
                'id' => 5,
                'qty' => 10,
                'minQty' => 25,
            ),
        ),
    ),
    2 =>
    array(
        'id' => 3,
        'name' => 'Tirana',
        'distance' => 120,
        'items' =>
        array(
            0 =>
            array(
                'id' => 3,
                'qty' => 30,
                'minQty' => 50,
            ),
            1 =>
            array(
                'id' => 4,
                'qty' => 35,
                'minQty' => 50,
            ),
            2 =>
            array(
                'id' => 5,
                'qty' => 25,
                'minQty' => 20,
            ),
        ),
    ),
];
// variabilizzo id Product
$id = $_GET["id"];
$idN = intval($id);
// controllo se id product esiste
if (empty($id)) {
    $storesFilters= [];
    $data = [
        "storesFilters" => $storesFilters,
        "idProduct" => "Errore,idProduct Mancante"
    ];
}

// filtro i dati controllando id prodotto in magazzino
$storesFilters = [];
foreach ($stores as $store) {
     
    foreach ($store["items"] as $item) {
        // controllo id prodotto
        if ($item["id"] == $id) {
            // controllo quantita del prodotto
            if ($item["qty"] < $item["minQty"]) {
                $store["qtyOrder"] = $item["minQty"] - $item["qty"];
                array_push($storesFilters, $store);
            }
        }
    }
}



//ordino per distanza dopo il filtraggio
foreach ($storesFilters as $store) {
    
    usort($storesFilters, function ($item1, $item2) {
        return $item1['distance'] <=> $item2['distance'];
    });
}



header('Content-Type: application/json');
$data = [
    "storesFilters" =>$storesFilters,
    "idProduct" => $id,
];
echo json_encode($data);