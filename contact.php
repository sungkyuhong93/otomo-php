
<?php include("header.php"); ?>
<div class="container">
<form action="email.php" method="post">
<h1 class="form-header">drop us a line —</h1>
	
	<div class="row">
	<fieldset>
	<input type="text" id="name" name="user_name" placeholder="Full Name">
	</fieldset>

	<fieldset>
	<input type="email" id="mail" name="user_email" placeholder="E-Mail">
	</fieldset>
	</div>

	<textarea id="message" name="message" placeholder="Message"></textarea>



	<button class="submit-button" name="send" type="submit">Submit</button>

</form>
</div>

<div class="info">
<div class="address">
<h2 id="address-title">Address —</h2>
<ul class="address-list">
<li>808 Springwood Avenue</li>
<li>Asbury Park, New Jersey</li>
<li>07712</li>
</ul>
</div>

<div class="business">
<h2 id="business-title">New Business —</h2>
<ul class="business-list">
<li>ed@otomodigital.com</li>
<li>eric@otomodigital.com</li>
</ul>
</div>

</div>

</div> <!--body-->
<?php include("footer.php"); ?>