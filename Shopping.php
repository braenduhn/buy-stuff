<?php
$busted = false;
$stuff = array();
// include the data file to fake database data
require_once("data.php");

// do stuff!
if( $_POST) {
    $price = 0;
    if(!empty($_POST['item_id'])) {
        for($i=0; $i<count($_POST['item_id']);$i++){
            foreach($items as $item){
                if($item['id'] == $_POST['item_id'][$i])
                    $price+=$item['price'];
            }
        }
        require_once("view_confirm.php");
        die();
    }
    $busted = true;
}

if(isset($_GET['link'])){
    $link=$_GET['link'];
    if($link == '1'){
        foreach ($items as $key => $row) {
            $stuff[$key]  = $row['name'];
        }
        array_multisort($stuff, SORT_ASC, $items);
    }
    else if ($link == '2'){
        foreach ($items as $key => $row) {
            $stuff[$key]  = $row['price'];
        }
        array_multisort($stuff, SORT_ASC, $items);
    }

}
// include the view items page
require_once("view_items.php");
?>
