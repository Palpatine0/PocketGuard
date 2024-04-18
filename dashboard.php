<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>仪表板</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <?php
        $sql = 'SELECT SUM(amount) AS totalAmount FROM transactions';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $totalAmount = $row['totalAmount'];
        ?>

        <div class="container mt-5">
            <h2>仪表板</h2>
            <div class="row">
                <div class="col-md">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">总收支</h5>
                            <p class="card-text">$<?php echo $totalAmount; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="mb-5">
                    <h4 class="text-center">支出细分</h4>
                    <div class="container" style="width: 45%;">
                        <div class="d-flex justify-content-center">
                            <canvas id="expenseTypePieChart" ></canvas>
                        </div>
                    </div>
                    <?php
                    $sql = "
                    SELECT c.name AS category_name, SUM(t.amount) AS total_amount
                    FROM transactions t
                    JOIN categories c ON t.cid = c.id
                    WHERE t.type = 2
                    GROUP BY c.name
                    ";
                    $result = mysqli_query($conn, $sql);
                    $labels_expense = [];
                    $data_expense = [];
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $labels_expense[] = $row['category_name'];
                            $data_expense[] = $row['total_amount'];
                        }
                    } else {
                        echo "未找到数据.";
                    }
                    ?>
                </div>



                <div>
                    <h4 class="text-center">收入细分</h4>
                    <div class="container" style="width: 45%;">
                        <div class="d-flex justify-content-center">
                            <canvas id="incomeTypePieChart" ></canvas>
                        </div>
                    </div>
                    <?php
                    $sql = "
                    SELECT c.name AS category_name, SUM(t.amount) AS total_amount
                    FROM transactions t
                    JOIN categories c ON t.cid = c.id
                    WHERE t.type = 1
                    GROUP BY c.name
                    ";
                    $result = mysqli_query($conn, $sql);
                    $labels_income = [];
                    $data_income = [];
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $labels_income[] = $row['category_name'];
                            $data_income[] = $row['total_amount'];
                        }
                    } else {
                        echo "未找到数据.";
                    }
                    ?>
                </div>


            </div>
        </div>



        <?php include 'common/footer.html'; ?>
    </body>


    <script>
        var ctx = document.getElementById('expenseTypePieChart').getContext('2d');
        var expenseTypePieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels_expense); ?>,
                datasets: [{
                    label: '',
                    data: <?php echo json_encode($data_expense); ?>,
                    backgroundColor: [
                        "#3A2D11",
                        "#8780E9",
                        "#EFF1F0",
                        "#FDEFD5",
                        "#CFC2B9",
                        "#9E7C49"

                    ],
                    borderColor: [
                        "#3A2D11",
                        "#8780E9",
                        "#EFF1F0",
                        "#FDEFD5",
                        "#CFC2B9",
                        "#9E7C49"

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    },
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementById('incomeTypePieChart').getContext('2d');
        var incomeTypePieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels_income); ?>,
                datasets: [{
                    label: '',
                    data: <?php echo json_encode($data_income); ?>,
                    backgroundColor: [
                        "#D8944A",
                        "#51A8E6",
                        "#ACD4EA",
                        "#527C8F",
                        "#D4B695",
                        "#8E4F34"
                    ],
                    borderColor: [
                        "#D8944A",
                        "#51A8E6",
                        "#ACD4EA",
                        "#527C8F",
                        "#D4B695",
                        "#8E4F34"
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    },
                }
            }
        });
    </script>

</html>