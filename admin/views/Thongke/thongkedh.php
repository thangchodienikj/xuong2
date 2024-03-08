<main class="main text-center" style="width: 78%; margin: 0 auto;">
    <div class="mb-5"></div>
    <div class="box_title " style="font-size: 25px">Thống kê đơn thuê</div>
    <br>
    <div class="container mt-3">
        <div class="row form_content">
            <div class="col-8">
                <div class="mb-3 formds_loai">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center col-md-1">Tổng số đơn hàng</th>
                                <th class="text-center col-md-2">Chưa liên hệ</th>
                                <th class="text-center col-md-2">Đã liên hệ</th>
                                <th class="text-center col-md-2">Đã thuê</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($thongkedh as $value) {
                                extract($value);

                                echo '<tr>
                                            <td class="text-center col-md-2">' . $donhang . '</td>
                                            <td class="text-center col-md-2">' . $chualh . '</td>
                                            <td class="text-center col-md-2">' . $dalh . '</td> 
                                            <td class="text-center col-md-2">' . $dathue . '</td> 
                                        </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tỉ lệ đơn thuê</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body p-0">
                        <div class="chart-pie pt-4 mb-4 d-flex justify-content-center align-items-center"> <!-- Sử dụng justify-content-center để căn giữa -->
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var totalOrders = <?=$donhang?>;

    var orderData = {
        newOrders: <?=$chualh?>,
        processingOrders: <?=$dalh?>,
        deliveringOrders: <?=$dathue?>,
    };
    var percentNewOrders = (orderData.newOrders / totalOrders) * 100;
    var percentProcessingOrders = (orderData.processingOrders / totalOrders) * 100;
    var percentDeliveringOrders = (orderData.deliveringOrders / totalOrders) * 100;
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: [percentNewOrders, percentProcessingOrders, percentDeliveringOrders],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }],
            labels: ['Chưa liên hệ', 'Đã liên hệ', 'Đã thuê']
        },
        options: {
            responsive: false,
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var label = data.labels[tooltipItem.index] || '';
                        if (label) {
                            label += ': ';
                        }
                        label += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + '%';
                        return label;
                    }
                }
            }
        }
    });


</script>

