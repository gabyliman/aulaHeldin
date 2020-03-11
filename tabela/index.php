<html>
    <head>
        <meta charset ="UTF-8">
        <title></title>
        <style>
            .cinza{
                color:black;
                background-color: lightgray
            }
            .verde{
                color:darkgreen;
                background-color: lightgreen
            }         
        </style>
    </head>
    <body>
        <table border ="1">
            <?php 
                for ($i = 0; $i<200; $i++){
                    if($i%2==0){
                        echo "<tr class='cinza'><td>Gabs</td></tr>";
                    }else{
                        echo "<tr class='verde'><td>Gabs</td></tr>";
                }}
                
            ?>          
           
        </table>        
    </body>
</html>


