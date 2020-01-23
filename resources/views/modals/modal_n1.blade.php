<!-- Central Modal Small -->
<div class="modal fade" id="n1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<!-- Change class .modal-sm to change the size of the modal -->
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title w-100 text-center" id="myModalLabel">Proyección Número 1</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body text-justify">
                {{-- JS grafico --}}
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script>
                    google.charts.load('current', {packages: ['corechart', 'line']});
                    google.charts.setOnLoadCallback(drawLogScales);

                    function drawLogScales() {
                          var data = new google.visualization.DataTable();
                          data.addColumn('number', 'X');
                          data.addColumn('number', 'Dogs');
                          data.addColumn('number', 'Cats');
                          data.addColumn('number', 'Ducks');

                          data.addRows([
                            [0, 0, 0, 56],    [1, 10, 5, 56],   [2, 23, 15, 56],  [3, 17, 9, 56],   [4, 18, 10, 56],  [5, 9, 5, 56],
                            [6, 11, 3, 56],   [7, 27, 19, 56],  [8, 33, 25, 56],  [9, 40, 32, 56],  [10, 32, 24, 56], [11, 35, 27, 56],
                            [12, 30, 22, 56], [13, 40, 32, 56], [14, 42, 34, 56], [15, 47, 39, 56], [16, 44, 36, 56], [17, 48, 40, 56],
                            [18, 52, 44, 56], [19, 54, 46, 56], [20, 42, 34, 56], [21, 55, 47, 56], [22, 56, 48, 56], [23, 57, 49, 56],
                            [24, 60, 52, 56], [25, 50, 42, 56], [26, 52, 44, 56], [27, 51, 43, 56], [28, 49, 41, 56], [29, 53, 45, 56],
                            [30, 55, 47, 56], [31, 60, 52, 56], [32, 61, 53, 56], [33, 59, 51, 56], [34, 62, 54, 56], [35, 65, 57, 56],
                            [36, 62, 54, 56], [37, 58, 50, 56], [38, 55, 47, 56], [39, 61, 53, 56], [40, 64, 56, 56], [41, 65, 57, 56],
                            [42, 63, 55, 56], [43, 66, 58, 56], [44, 67, 59, 56], [45, 69, 61, 56], [46, 69, 61, 56], [47, 70, 62, 56],
                            [48, 72, 64, 56], [49, 68, 60, 56], [50, 66, 58, 56], [51, 65, 57, 56], [52, 67, 59, 56], [53, 70, 62, 56],
                            [54, 71, 63, 56], [55, 72, 64, 56], [56, 73, 65, 56], [57, 75, 67, 56], [58, 70, 62, 56], [59, 68, 60, 56],
                            [60, 64, 56, 56], [61, 60, 52, 56], [62, 65, 57, 56], [63, 67, 59, 56], [64, 68, 60, 56], [65, 69, 61, 56],
                            [66, 70, 62, 56], [67, 72, 64, 56], [68, 75, 67, 56], [99, 80, 72, 100]
                          ]);

                          var options = {
                            hAxis: {
                              title: 'Time',
                              logScale: true
                            },
                            vAxis: {
                              title: 'Popularity',
                              logScale: false
                            },
                            colors: ['#a52714', '#097138', '#000000']
                          };

                          var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                          chart.draw(data, options);
                        }
                </script>

                <div class="centrar-grafico" id="chart_div"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-deep-orange btn-sm" data-dismiss="modal">Ok !</button>
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->