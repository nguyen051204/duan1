<div class="row">

</div>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Biểu đồ</h3>
                <div class="ml-auto text-right">
                    <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="row formtitle mb">
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <div id="piechart"></div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


                    <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Danh mục', 'Số lượng sản phẩm'],
                                <?php
                                $tongdm = count($listtk);
                                $i = 1;
                                foreach ($listtk as $thongke) {
                                    extract($thongke);
                                    if ($i == $tongdm) {
                                        $comma = "";
                                    } else {
                                        $comma = ",";
                                    }
                                    echo "['" . $thongke['tenlp'] . "'," . $thongke['countp'] . "]" . $comma;
                                    $i += 1;
                                }
                                ?>


                            ]);

                            // Optional; add a title and set the width and height of the chart
                            var options = {
                                'title': 'Biểu đồ loại phòng',
                                'width': 600,
                                'height': 400
                            };

                            // Display the chart inside the <div> element with id="piechart"
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>