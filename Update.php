<html>
    <head>
        <title>update data</title>
</head>
<body>
    <?php
    if isset ($_POST{'btn update'})
    {
        $con=mysqLi_connect("local host","root","",""db_student);
        if(!$con)
        {
            die("Database not connected");
        }
        $id=$_POST['txtid'];
        $name=$_POST['txtname'];
        $add=$_POST['txtaddress'];
        $qry="update tb_student set name='$name',address='$add where is='$is';
        $result=mysqli_query ($con,$qry);
        if ($result)
        {
            echo"Data updates";
    }
    else
    {
        echo"Error updating data";
    }
    mysqli_close($con);
}
?>
<html>
<head>
<title>title of the page </title>
</head>
<body>
<form method="POST">
ID:<input type="text"name="txt.id"><br><br>
Name:<input type="text"name="txtname"><br><br>
Address:<input type="text"name="txtaddress"><br><br>
<input type="submit"value="submit"name="btn submit">
</form>
</body>
</html>
