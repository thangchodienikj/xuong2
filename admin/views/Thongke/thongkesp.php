<main class="main text-center" style="width: 78%; margin: 0 auto;">
    <div class="mb-5"></div>
    <div class="box_title " style="font-size: 25px">Thống kê theo sản phẩm</div> <br>
    <div class="mb-3">
        <form action="index.php?act=thongkesp" method="post" >
            <select class="form-select" id="tg" name="tg" style="width: 200px;height: 37px">
                <option value="0" selected>Chọn khoảng thời gian</option>
                <option value="1">1 tuần trước</option>
                <option value="2">1 tháng trước</option>
                <option value="3">6 tháng trước</option>
                <option value="4">1 năm trước</option>
            </select>
            <input type="submit" name="gui" class="btn btn-primary" value="Gửi">
        </form>
    </div>
    <div class="container mt-3">
        <div class="row form_content">
            <div class="col-12">
                <div class="mb-3 formds_loai">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center col-md-2">Tên sản phẩm</th>
                                <th class="text-center col-md-2">Lượt xem</th>
                                <th class="text-center col-md-2">Lượt thuê</th>
                                <th class="text-center col-md-2">Lượt bình luận</th>
                                <th class="text-center col-md-2">Danh thu</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $totalRevenue = 0;
                            foreach ($thongkesp as $value) {
                                extract($value);
                                $totalRevenue += $value['danhthu'];
                            }
                            $i = 0;
                            foreach ($thongkesp as $value) {
                                extract($value);
                                echo '<tr>
                                <td class="text-center col-md-2">' . $value['ten'] . '</td>
                                <td class="text-center col-md-2">' . $value['luotxem'] . '</td>
                                <td class="text-center col-md-2">' . $value['luotthue'] . '</td>
                                <td class="text-center col-md-2">' . $value['binhluan'] . '</td>
                                <td class="text-center col-md-2">' . $value['danhthu'] . '</td>
                            </tr>';
                                $i += $value['danhthu'];}
                            echo '<tr>
                                <td colspan="4" class="text-center"><strong>Tổng doanh thu sản phẩm</strong></td>
                                <td class="text-center">' . $totalRevenue . '</td>
                            </tr>';
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                let data = <?= json_encode($thongkesp) ?>;

                let chartData = [['Tên sản phẩm', 'Doanh thu']];
                data.forEach(function(item) {
                    chartData.push([item.ten, parseInt(item.danhthu)]);
                });
                var datatable = google.visualization.arrayToDataTable(chartData);
                var options = {'title':'Thống kê doanh số bán hàng', 'width':1200, 'height':500};
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(datatable, options);
            }
        </script>

    </div>
</main>






