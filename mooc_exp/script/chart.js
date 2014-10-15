      
      //#################################
      // Google Chart API Implementation
      //#################################
      
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawCamembert);
      google.setOnLoadCallback(drawColumn);

      // ##### Camembert Chart #####
      function drawCamembert() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Video',     5],
          ['Exercice',      2],
          ['Lecture',  2]
        ]);

        var options = {
          title: 'Activité du jour',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('camembert'));
        chart.draw(data, options);
      }

      // ##### Column Chart (Histogramme) #####
      function drawColumn() {
        var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2004',  1000,      400],
        ['2005',  1170,      460],
        ['2007',  1030,      540]
        ]);

        var options = {
        title: 'Company Performance',
        hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

          var chart = new google.visualization.ColumnChart(document.getElementById('column'));
          chart.draw(data, options);
      }