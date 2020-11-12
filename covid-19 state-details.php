<?php
$title = $_GET["s_title"];
echo "<html>";
echo "<head>";
echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\">";
echo "<link rel=\"stylesheet\" href=\"covid-19 style.css?v=<?php echo time(); ?>\">";
echo "<script src=\"https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js\"></script>";
echo "</head>";
echo "<body>";
echo "<center><h1 style=\"font-family: arial black;font-size: 50px;color: saddlebrown\">STATE-WISE COVID-19 CASE ANALYZER</h1></center>";
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"covid-19");
if($title=="MAHARASHTRA"){
    $query_1="select * from india where sname='MAHARASHTRA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='MAHARASHTRA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td><td> : : </td><td>ACTIVE</td><td> : </td><td>".$row['active']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";
}
else if($title=="ANDHRA PRADESH"){
    $query_1="select * from india where sname='ANDHRA PRADESH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='ANDHRA PRADESH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";
}
else if($title=="KARNATAKA"){
    $query_1="select * from india where sname='KARNATAKA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='KARNATAKA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";
}
else if($title=="TAMIL NADU"){
    $query_1="select * from india where sname='TAMIL NADU'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='TAMIL NADU'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="UTTAR PRADESH"){
    $query_1="select * from india where sname='UTTAR PRADESH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='UTTAR PRADESH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="DELHI"){
    $query_1="select * from india where sname='DELHI'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='DELHI'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="WEST BENGAL"){
    $query_1="select * from india where sname='WEST BENGAL'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='WEST BENGAL'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="ORISSA"){
    $query_1="select * from india where sname='ODISHA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='ODISHA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="KERALA"){
    $query_1="select * from india where sname='KERALA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='KERALA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="TELANGANA"){
    $query_1="select * from india where sname='TELANGANA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='TELANGANA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="BIHAR"){
    $query_1="select * from india where sname='BIHAR'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='BIHAR'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="ASSAM"){
    $query_1="select * from india where sname='ASSAM'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='ASSAM'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="GUJARAT"){
    $query_1="select * from india where sname='GUJARAT'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='GUJARAT'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="RAJASTHAN"){
    $query_1="select * from india where sname='RAJASTHAN'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='RAJASTHAN'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="MADHYA PRADESH"){
    $query_1="select * from india where sname='MADHYA PRADESH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='MADHYA PRADESH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="HARYANA"){
    $query_1="select * from india where sname='HARYANA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='HARYANA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="CHATTISHGARH"){
    $query_1="select * from india where sname='CHATTISGARH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='CHATTISHGARH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="PUNJAB"){
    $query_1="select * from india where sname='PUNJAB'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='PUNJAB'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";


}
else if($title=="JHARKHAND"){
    $query_1="select * from india where sname='JHARKHAND'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='JHARKHAND'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="JAMMU AND KASHMIR"){
    $query_1="select * from india where sname='JAMMU AND KASHMIR'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='JAMMU AND KASHMIR'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="UTTARAKHAND"){
    $query_1="select * from india where sname='UTTARAKHAND'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='UTTARAKHAND'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="GOA"){
    $query_1="select * from india where sname='GOA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='GOA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="PUDUCHERRY"){
    $query_1="select * from india where sname='PUDUCHERRY'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='PUDUCHERRY'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="TRIPURA"){
    $query_1="select * from india where sname='TRIPURA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='TRIPURA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="HIMACHAL PRADESH"){
    $query_1="select * from india where sname='HIMACHAL PRADESH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='HIMACHAL PRADESH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="CHANDIGARH"){
    $query_1="select * from india where sname='CHANDIGARH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='CHANDIGARH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="MANIPUR"){
    $query_1="select * from india where sname='MANIPUR'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='MANIPUR'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="ARUNACHAL PRADESH"){
    $query_1="select * from india where sname='ARUNACHAL PRADESH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='ARUNACHAL PRADESH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="NAGALAND"){
    $query_1="select * from india where sname='NAGALAND'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='NAGALAND'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="MEGHALAYA"){
    $query_1="select * from india where sname='MEGHALAYA'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='MEGHALAYA'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="LADAKH"){
    $query_1="select * from india where sname='LADAKH'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='LADAKH'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="ANDAMAN AND NICOBAR ISLANDS"){
    $query_1="select * from india where sname='ANDAMAN AND NICOBAR ISLANDS'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='ANDAMAN AND NICOBAR ISLANDS'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="DADRA AND NAGAR HAVELI AND DAMAN AND DIU"){
    $query_1="select * from india where sname='DADRA AND NAGAR HAVELI AND DAMAN AND DIU'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='DADRA AND NAGAR HAVELI AND DAMAN AND DIU'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="SIKKIM"){
    $query_1="select * from india where sname='SIKKIM'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='SIKKIM'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else if($title=="MIZORAM"){
    $query_1="select * from india where sname='MIZORAM'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='MIZORAM'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";

}
else{
    $query_1="select * from india where sname='LAKSHADWEEP'";
    $rs_1=mysqli_query($conn,$query_1);
    while($row=mysqli_fetch_array($rs_1))
    {
        $confirmed=$row['confirmed'];
        $dead=$row['dead'];
        $recovered=$row['recovered'];
        $active=$row['active'];
    }
    
    $query_2="select * from district where sname='LAKSHADWEEP'";
    $rs_2=mysqli_query($conn,$query_2);
    echo "<div class=\"dist-box\">
                <span id=\"spec\"><center>$title - SPECIFIC INFO - SHEET
                DISTRICT - WISE COVID-19 ANALYSIS</center><br>
                    <table>";
                       while($row=mysqli_fetch_array($rs_2)) 
                       {
                           echo "<tr><td>".$row['dname']."</td><td> || CONFIRMED</td><td> : </td><td>".$row['confirmed']."</td><td> : : </td><td>DEAD</td><td> : </td><td>".$row['dead']."</td><td> : : </td><td>RECOVERED</td><td> : </td><td>".$row['recovered']."</td></tr>";
                       }
                echo "</table>
                        
                    </span>
                </div>
            </div>";
}
    echo "<center><span id=\"state-heading\">$title</span></center>";
    echo "<div class=\"state-box\">
    <span id=\"case\">CONFIRMED : </span><span id=\"case-num\">&nbsp&nbsp$confirmed</span>&nbsp&nbsp&nbsp&nbsp
    <span id=\"case\">DEAD : </span><span id=\"case-num\">&nbsp&nbsp$dead</span>&nbsp&nbsp&nbsp&nbsp
    <span id=\"case\">RECOVERED : </span><span id=\"case-num\">&nbsp&nbsp$recovered</span>&nbsp&nbsp&nbsp&nbsp
    </div>";
    date_default_timezone_set('Asia/Kolkata');
    echo "<div class=\"last-mod\"><span id=\"case\">Last modified : </span><span id=\"case-num\">" . date ("m / d / Y H:i", getlastmod())." IST</span>\n</div><br><br><br><br><br><br><br><br><br><br>";
    
   
    echo "<div id=\"container\" style=\"width: 49%; height: 40%\"></div>
    <script>
      anychart.onDocumentReady(function() {
 
        // set the data
        var data = {
            header: [\"COVID-19 STATUS\", \"NUMBER OF PEOPLE\"],
            rows: [
              [\"CONFIRMED\", $confirmed],
              [\"DEAD\", $dead],
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