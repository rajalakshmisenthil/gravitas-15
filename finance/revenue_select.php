<?php
	session_start();
	if((isset($_SESSION['name_fin']))&&(isset($_REQUEST['id'])))//session_variable verification
	{
		echo "
		<div class='container'>
		<div class='row'>
		<div class='input-field col s12 m5'>
			<select id='branch_revenue' onchange='notify_me(this.value)' class='browser-default' name='branch_expenses'>

			  <option value='0'>Branch</option>
			  <option value='1'>Sponsors</option>
			  <option value='2' >Accomodation</option>
			  <option value='3'>Stall Rent</option>
			  <option value='4'>T-Shirt Sales</option>
			  <option value='5'>Workshops</option>
			  <option value='6'>Others</option>
			</select>
			</div></div>
			<div id='revenue_detail' name='revenue_detail'></div>
		</div>
		<script>
			$('select').material_select();
		</script>";
	}

	else if((isset($_SESSION['name_fin']))&&(!isset($_REQUEST['id']))||((!isset($_SESSION['name_fin']))&&(!isset($_REQUEST['id']))))
	{
		session_unset();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		session_destroy();
		header("Location:login_approve.php");
	}
	else
	{
		session_unset();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		session_destroy();
		echo "<div>Ah4*!bb dhS8!) Nh5@n</div>";
		exit();
	}
?>
