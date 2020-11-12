<?php
$title = $_GET["s_title"];
echo "<html>";
echo "<head>";
echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\">";
echo "<link rel=\"stylesheet\" href=\"covid-19 style.css?v=<?php echo time(); ?>\">";
echo "<script src=\"https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js\"></script>";
echo "</head>";
echo "<body>";
echo "<center><h1 style=\"font-family: arial black;font-size: 50px;color: saddlebrown\">COUNTRY-WISE COVID-19 CASE ANALYZER</h1></center>";
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"covid-19");
$confirmed=0;$death=0;$recovered=0;$active=0;
if($title=="USA"){
    $query_1="select * from country where country='US'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="INDIA"){
    $query_1="select * from country where country='India'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="BRAZIL"){
    $query_1="select * from country where country='Brazil'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="SPAIN"){
    $query_1="select * from country where country='Spain'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="IRAN"){
    $query_1="select * from country where country='Iran'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="ITALY"){
    $query_1="select * from country where country='Italy'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="CHINA"){
    $query_1="select * from country where country='China'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="MALAYSIA"){
    $query_1="select * from country where country='Malaysia'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="CANADA"){
    $query_1="select * from country where country='Canada'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="AUSTRALIA"){
    $query_1="select * from country where country='Australia'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="NEW ZEALAND"){
    $query_1="select * from country where country='New Zealand'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="ARGENTINA"){
    $query_1="select * from country where country='Argentina'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="GERMANY"){
    $query_1="select * from country where country='Germany'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="FRANCE"){
    $query_1="select * from country where country='France'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="NETHERLANDS"){
    $query_1="select * from country where country='Netherlands'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="BANGLADESH"){
    $query_1="select * from country where country='Bangladesh'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="ISRAEL"){
    $query_1="select * from country where country='Israel'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="JAPAN"){
    $query_1="select * from country where country='Japan'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else if($title=="SOUTH KOREA"){
    $query_1="select * from country where country='South Korea'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
else{
    $query_1="select * from country where country='United Arab Emirates'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $death=$row['death'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
}
    echo "<center><span id=\"country-heading\">$title</span></center>";
    echo "<div class=\"country-box\">
    <span id=\"case\">CONFIRMED : </span><span id=\"case-num\">&nbsp&nbsp$confirmed</span>&nbsp&nbsp&nbsp&nbsp
    <span id=\"case\">DEAD : </span><span id=\"case-num\">&nbsp&nbsp$death</span>&nbsp&nbsp&nbsp&nbsp
    <span id=\"case\">RECOVERED : </span><span id=\"case-num\">&nbsp&nbsp$recovered</span>&nbsp&nbsp&nbsp&nbsp
    </div>";
    date_default_timezone_set('Asia/Kolkata');
    echo "<div class=\"last-mod\"><span id=\"case\">Last modified : </span><span id=\"case-num\">" . date ("m / d / Y H:i", getlastmod())." IST</span>\n</div><br><br><br><br><br><br><br><br><br><br>";
    
   
    echo "<center><div id=\"container\" style=\"width: 80%; height: 50%\"></div></center>
    <script>
      anychart.onDocumentReady(function() {
 
        // set the data
        var data = {
            header: [\"COVID-19 STATUS\", \"NUMBER OF PEOPLE\"],
            rows: [
              [\"CONFIRMED\", $confirmed],
              [\"DEAD\", $death],
              [\"RECOVERED\", $recovered],
              [\"ACTIVE\", $active],
        ]};
 
        // create the chart
        var chart = anychart.column();
 
        // add the data
        chart.data(data);
 
        // set the chart title
        chart.title(\"COVID-19 STATUS IN $title\");
 
        // draw
        chart.container(\"container\");
        chart.draw();
      });
    </script>";

mysqli_close($conn);

echo "</body>";
echo "</html>";
?>