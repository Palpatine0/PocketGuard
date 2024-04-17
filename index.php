<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personal Finance Tracker</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>

        <div class="container mt-5">
            <h1 class="text-center">Welcome to Your Personal Finance Tracker</h1>
            <p class="text-center">Take control of your financial life with easy tracking of income and expenses.</p>

            <section id="dashboard-overview" class="text-center mb-5 py-5 bg-light">
                <h3 class="mb-3 display-4">Your Financial Dashboard</h3>
                <p class="mb-4 text-muted">Here's what we have achieved together with our community!</p>
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title mb-3">Active Users</h5>
                            <p class="card-text h3 text-dark">10,000+</p>
                            <p class="card-text"><small class="text-muted">Join our growing community!</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">Transactions Tracked</h5>
                            <p class="card-text h3 text-dark">500,000+</p>
                            <p class="card-text"><small class="text-muted">Half a million transactions and counting.</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">Money Managed</h5>
                            <p class="card-text h3 text-dark">$1M+</p>
                            <p class="card-text"><small class="text-muted">Over a million in assets tracked.</small></p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <?php include 'common/footer.html'; ?>
    </body>
</html>
