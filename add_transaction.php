<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Transaction</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>Add New Transaction</h2>
            <form action="process_transaction.php" method="post">
                <!-- Transaction Type -->
                <div class="mb-3">
                    <label for="transactionType" class="form-label">Transaction Type</label>
                    <select class="form-select" id="transactionType" name="transaction_type" required>
                        <option value="">Select Type</option>
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                    </select>
                </div>

                <!-- Amount -->
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
                </div>

                <!-- Date -->
                <div class="mb-3">
                    <label for="transactionDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="transactionDate" name="transaction_date" required>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Category (e.g., Groceries, Salary)" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description of the transaction"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Add Transaction</button>
            </form>
        </div>

        <?php include 'common/footer.html'; ?>
    </body>
</html>
