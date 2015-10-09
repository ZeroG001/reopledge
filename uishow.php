<?php 

?>

<style>

	.show-form-container {
		position: relative;
		padding: 30px;

		-webkit-animation: slide-in 0.4s ease-out;
		
	}

	.slide-out {
		-webkit-animation: slide-in 0.4s ease-out;
	}

	.show-form-list {
		margin: 0px;
		padding: 0px;
		list-style: none;
	}

	@-webkit-keyframes slide-in {
		from { left: 20px; opacity: 0; }
		to { left: 0; opacity: 1}
	}

</style>



<div class="show-form-container">

<h1> Agent Form / Staff Form </h1>


	<ul class="show-form-list">
		<li>
			<span>Name -</span> James Jamzon
		</li>

		<li>
			<span>Address -</span> 2933 Katella
		</li>

		<li>
			<span>Company -</span> REO/JJ/MB
		</li>

		<li>
			<span>Office Number -</span> 29
		</li>

		<li>
			<span>Amount -</span> $10
		</li>

		<li>
			<span>Frequency -</span> 2
		</li>

		<li> 
			<span> Comments -</span> Don't charge me all of the time. Just some of the time.
		</li>
	</ul>

	<form> 
		<span> Status - Complete</span>

		<h3> Update Status </h3>
		<select name="status">
			<option> Complete</option>
			<option> Incomplete </option>
			<option> Void </option>
		</select>

		<input type="submit" value="update" />

	</form>

</div>