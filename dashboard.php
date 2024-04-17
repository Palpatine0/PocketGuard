<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>Dashboard</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>Dashboard</h2>
            <!-- Financial Summary -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Balance</h5>
                            <p class="card-text">$1,200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Income This Month</h5>
                            <p class="card-text">$3,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total Expenses This Month</h5>
                            <p class="card-text">$1,800</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Graphical Representations -->
            <div class="row mt-4">
                <div class="col-md-7">
                    <h4>Monthly Expense Breakdown</h4>
                    <canvas id="monthlyExpenseChart"></canvas>
                </div>
                <div class="col-md-7">
                    <h4>Income vs. Expenses</h4>
                    <canvas id="incomeVsExpenseChart"></canvas>
                </div>
            </div>
        </div>

        <?php include 'common/footer.html'; ?>
    </body>
</html>
