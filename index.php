<?php
//@todo detangle php and html
$name= (isset($_REQUEST['name'])) ? $_REQUEST['name'] : 'Paul'; ?>

<style>
	#testing{
		min-width: 50%;
		min-height: 100px;
		background-color: #efefef;
	}
</style>
<div id="testing"><?php echo "<br/>Hello World my name is : ".$name;?></div>