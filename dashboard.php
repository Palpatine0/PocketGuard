<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>仪表板</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>仪表板</h2>
            <div class="row">
                <div class="col-md">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">本月总支出</h5>
                            <p class="card-text">$1,800</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-7">
                    <h4>每月支出细分</h4>
                    <canvas id="monthlyExpenseChart"></canvas>
                </div>
                <div class="col-md-7">
                    <h4>收入 vs. 支出</h4>
                    <canvas id="incomeVsExpenseChart"></canvas>
                </div>
            </div>
        </div>
        <?php include 'common/footer.html'; ?>
    </body>
</html>