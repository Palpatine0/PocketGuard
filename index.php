<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personal Finance Tracker</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>

        <div class="container mt-5">
            <h1 class="text-center">欢迎使用您的个人财务跟踪器</h1>
            <p class="text-center">通过轻松跟踪收入和支出，掌控您的财务生活。</p>
            <section id="dashboard-overview" class="text-center mb-5 py-5 bg-light">
                <h3 class="mb-3 display-4">您的财务仪表板</h3>
                <p class="mb-4 text-muted">以下是我们与社区共同取得的成就！</p>
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title mb-3">活跃用户</h5>
                            <p class="card-text h3 text-dark">10,000+</p>
                            <p class="card-text"><small class="text-muted">加入我们不断增长的社区！</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">跟踪的交易</h5>
                            <p class="card-text h3 text-dark">500,000+</p>
                            <p class="card-text"><small class="text-muted">超过五十万笔交易，数量不断增加。</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">资金管理</h5>
                            <p class="card-text h3 text-dark">$1M+</p>
                            <p class="card-text"><small class="text-muted">已跟踪资产超过一百万美元。</small></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'common/footer.html'; ?>
    </body>
</html>
