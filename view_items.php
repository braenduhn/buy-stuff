<html>

<head>
<title>Incredibly Simple Shopping</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">

</head>

<body>

<div class="container">

<div class="page-header">
	<h1>Buy More!</h1>
</div>

<div class="row col-md-8 col-md-offset-2">

<!-- on button click, POST back to self (controller) -->
<form method="POST" action="">

<table class="table">

<thead>
	<tr>
		<th></th>
		<th><a href="?link=1">Name</a></th>
		<th class="price"><a href="?link=2">Price</a></th>
	</tr>
</thead>

<!-- 
	use PHP to generate these table rows based on what is in the $items array.
	pay attention to the name/value attributes!
-->
<?php
foreach($items as $item){
    ?>
<tr>
	<td rowspan="2">
		<input type="checkbox" name="item_id[]" value=<?=$item['id'];?>>
		<img class="thumb" src=<?=$item['img'];?>>
	</td>
	<td><span class="name"><?=$item['name'];?></span></td>
	<td class="price"><?=$item['price'];?></td>
</tr>
<tr><td colspan="2"><?=$item['desc'];?></td></tr>
<?php }?>
<!-- end generating table rows -->
</table>

<!-- 
	notice the button has a name attribute, so that you can tell they POSTed even if they didn't
	select any checkboxes!
-->
<?php
if( $busted ) {
    echo '<script language="javascript">';
    echo 'alert("Hey! Pick something to buy!")';
    echo '</script>';
}
?>
<button class="btn btn-primary" name="buy">Buy!</button>

</div>

</body>

</html>
