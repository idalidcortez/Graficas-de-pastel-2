<!DOCTYPE html>
<html>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
            
            

    <head>
    
     

      <div class="box-part text-center" >
                                                            
      <img src="cinepolis.png" width="290" height="90"> 

    </div>


        
        <br>
        <br>
        <title>Crear un gráfico circular con Google Chart usando PHP y MySQL </title>
        <h1 align="center" style= "color:#E9156A ;"> 
        Gráfico de Pastel: Idalid  </h1> 
        <br>
        <h2 align="center" style= "color:#E6548E ;""> Productos vendidos por Cinepolis </h2>

       



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            function drawChart() {
                // call ajax function to get sports data
                var jsonData = $.ajax({
                    url: "getData.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);
 
                // To render the pie chart.
                var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
                chart.draw(data, {width: 1300, height: 1000});

                var options = {
                width: 1500,
                height: 1000,
                title: '',
               colors: ['#17becf', '#316395', '#22aa99','#b91383',  '#6633cc', '#329262', '#5574a6', '#3b3eac','#f4359e', '#2a778d', ]
               };

chart.draw(data, options);

            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});
 
            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);

            var options = {
          title: 'Productos vendidos por Cinepolis'
        };
        </script>
        
    </head>
    <body>
           <div id="chart_container"></div>
    </body>
</html>