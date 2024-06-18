<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once("templates/nav.php");?>
    <div class="header">
        <h1>Forms </h1>
    </div>
    <div class="row">
        <div class="content">
    <form action="" method="" class="contact_form">
        
        <input type="text" id="Fn" placeholder="Fullname"><br><br>

        <input type="number" placeholder="Age"><br><br>
        <input type="password" placeholder="Pass"><br><br>

        <input type="email" placeholder="Email Address"><br><br>
        <input type="color" placeholder=""><br><br>

        <input type="range" placeholder=""><br><br>

        <input type="date" placeholder=""><br><br>

        <input type="time" placeholder=""><br><br>

        <label for="Basic">Basic</label>
         <input type="radio" id="Basic" name="level" placeholder="">

         <label for="Intermediate">Intermediate</label>
         <input type="radio" id="Intermediate" name="level" placeholder="">

        <label for="Advanced">Advanced</label>
         <input type="radio" id="Advanced" name="level" placeholder="">
<br><br>
<input type="checkbox" id="Swahili" value="Swahili" name="Swahili">
<label for="Swahili">Swahili</label><br>

<input type="checkbox" id="English" value="English" name="English">
<label for="English">English</label><br>

<input type="checkbox" id="Spanish" value="Spanish" name="Spanish">
<label for="Spanish">Spanish</label><br>

<input type="checkbox" id="Japanese" value="Japanese" name="Japanese">
<label for="Japanese">Japanese</label><br>


<br>


<textarea cols="30" rows="10"></textarea>

<br><br>

<select name="" id="">
    <option value="">---Select Gender-</option>
    <option value="1">Female</option>
    <option value="2">Male</option>
    <option value="3">Rather not say</option>
</select>

<br><br>
<input type="submit" value="Save Details">
</form>
</div>
</div>
<div class="footer">
    Copyright - BBIT 2.1 &copy; - Allrights Reserved
</div>

</body>
</html>

