<head>
    <title> Input Client </title>
</head>
<body>

<form action="Input_Helper.php" method="POST">
    Name: <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name"><br>
    Age: <input type="text" name="age" placeholder=" Age"><br>
    Date: <input type="date" name="date" placeholder="Date"><br>
    <!--    <input type="text" name="branch" placeholder="Branch"><br>-->
    Branch: <select name="branch">
        <option>APLB</option>
        <option>APLD</option>
        <option>APLH</option>
        <option>APLM</option>
        <option>APLW</option>
        <option>APLY</option>
        <option>Other</option>
    </select><br>
    Comment: <textarea name="comment" rows="5" cols="40"> </textarea><br>
    <button type="submit" name="submit" value="submit">Submit</button>

</form>

</body>


