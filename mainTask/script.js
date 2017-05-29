$(document).ready(function(){
    $('.vote1').click(function(){
    $('#poll').hide();
      $.ajax({
        url: 'vote.php?vote='+$(this).val(),
        success: function(good) {
        good = $.parseJSON(good);
       
        if(good[0].length == 0) { 
          good[0] = 0;
        }
        if(good[1].length == 0) {
          good[1] = 0;
        }
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Percentage'],
            ['Good', parseInt(good[0])],
            ['Bad', parseInt(good[1])]
            ]);
          var options = {
            title: 'We are: ',
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options); 
        } 
      }
    });
  });
});






