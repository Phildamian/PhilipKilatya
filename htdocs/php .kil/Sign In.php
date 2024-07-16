<?php include"includes/Header.php"; ?>
<?php include"includes/navbar.php"; ?>
<h2 style="text-decoration:underline;font-weight:bolder;margin-left:400px;color:blue;">SIGN-IN FORM</h2>
<form style="border-style:dotted; border-radius:5%; padding:10px;background-color:cyan;">
    <fieldset>
        <legend style="font-weight:bolder;color:blue;">Enter full name</legend>
        <input type="text"  id="nm" placeholder="First name" required="yes">
        <input type="text"  id="nm" placeholder="Last name"required="yes">
    </fieldset>
    <fieldset>
        <legend style="font-weight:bolder;color:blue;">Enter place of residence</legend>
        <input type="text"  id="pl" placeholder="Residence"required="yes">
        </fieldset>
    <fieldset>
        <legend style="font-weight:bolder;color:blue;">Enter purpose of gadget</legend>
        <label for="ent">Entertainment</label><input type="checkbox" value="entertainment" id="b" name="P">
        <label for="study">Studies</label><input type="checkbox" value="study" id="b"name="P">
        <label for="Biz">Business</label><input type="checkbox" value="biz" id="b"name="P">
    </fieldset>
    <fieldset>
        <legend style="font-weight:bolder;color:blue;">Delivery options:</legend>
        Would you like delivery at your home?:
        YES <input type="radio" name="y" id="y">
        NO <input type="radio" name="y" id="y">
       </fieldset>
       
       <fieldset>
        <legend style="font-weight:bolder;color:blue;">Enter tel number</legend>
        <input type="tel" name="nu" id="nu"required="yes" max-width="4">
    </fieldset><br>
    <fieldset>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </fieldset>
    
</form>
<?php include"includes/Footer.php"; ?>