<html>
    <body>
        <h1> Electricity Bill</h2>
        <form method="post" action="#">
            Consumer ID:<input type="number" name="id"><br>
            Name:<input type="text" name="name"><br>
            previous Reading:<input type="number" name="prev"><br>
            present reading:<input type="number" name="pres"><br><br>
            <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $prev=$_POST['prev'];
        $pres=$_POST['pres'];
        $units=$pres-$prev;

        echo"____________________________________________________________________________";
        echo"<br><br.";
        echo"Consumer ID:".$id."<br>";
        echo"Consumer name:".$name."<br>";
        echo"Units Consumed:".$units."<br>";
        if($units<=100)
        {
            $amt=$units*3;
        }
        else if($units>100&&$units<=200)
        {
            $amt=$units*4;
        }
        else if($units>200&&$units<=300)
        {
            $amt=$units*5;
        }
        else
        {
            $amt=$units*6;
        }
        echo"<h4>Total Rs.:".($amt)."</h4><br>";
        echo"____________________________________________________________________________";
    }
    ?>
    </body>
