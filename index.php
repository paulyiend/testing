<?php
//@todo detangle php and html
$name= (isset($_REQUEST['name'])) ? $_REQUEST['name'] : 'Paul'; ?>

<style>
	#testing{
		min-width: 50%;
		min-height: 100px;
		background-color: #CCC; /*felt that stronger colour was needed*/
	}
</style>
<div id="testing"><?php echo "<br/>Hello World my name is : ".$name;?></div>

<p>Can you tell what is it yet?</p>