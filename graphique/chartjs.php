<script type="text/javascript">
/*
* S. radar chart
*/

      // radar chart data
      var radarData = {
        labels: ["Coder", "Dormir", "M'hydrater", "Sortir", "Manger", "League of legend"],
        datasets: [
        {
          label: "En temps normal",
            fillColor: "rgba(200,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [60,35,60,10,30,40]
        },
        ]
      };

      // radar chart options
      var radarOptions = {
       responsive: true
     }

      // get radar chart canvas
      var radar= document.getElementById("traindevie").getContext("2d");

      // draw radar chart
      new Chart(radar).Radar(radarData, radarOptions);

/*
* E. radar chart
*/
/*
* S. radar chart
*/

      // radar chart data
      var radarData = {
        labels: ["HTML", "CSS", "Bootstrap", "PHP", "Chart.js"],
        datasets: [
        {
          label: "En temps normal",
            fillColor: "rgba(200,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [90,70,75,30,65]
        },
        ]
      };

      // radar chart options
      var radarOptions = {
       responsive: true
     }

      // get radar chart canvas
      var radar= document.getElementById("experience").getContext("2d");

      // draw radar chart
      new Chart(radar).Radar(radarData, radarOptions);

/*
* E. radar chart
*/

</script>
