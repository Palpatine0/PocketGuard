<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Transaction</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>添加交易</h2>
            <form action="process_transaction.php" method="post">
                <!-- Transaction Type -->
                <div class="mb-3">
                    <label for="transactionType" class="form-label">交易类型</label>
                    <select class="form-select" id="transactionType" name="transaction_type" required>
                        <option value="">选择类型</option>
                        <option value="Income">收入</option>
                        <option value="Expense">支出</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">金额</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="输入金额" required>
                </div>

                <div class="mb-3">
                    <label for="transactionDate" class="form-label">日期</label>
                    <input type="date" class="form-control" id="transactionDate" name="transaction_date" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">类别</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="类别（例如，杂货，工资）" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">描述</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="交易描述"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">添加交易</button>
            </form>
        </div>

        <?php include 'common/footer.html'; ?>
    </body>
</html>
