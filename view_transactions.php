<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php include 'common/resource.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>View Transactions</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>Transaction List</h2>
            <div class="container mt-5">
                <h3>Expense Distribution by Category</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fake data
                    $transactions = [
                        ["date" => "2023-12-01", "type" => "Expense", "category" => "Groceries", "amount" => 100, "description" => "Weekly groceries"],
                        ["date" => "2023-12-02", "type" => "Income", "category" => "Salary", "amount" => 2000, "description" => "Monthly salary"],
                        ["date" => "2023-12-03", "type" => "Expense", "category" => "Rent", "amount" => 500, "description" => "Monthly rent"],
                        ["date" => "2023-12-04", "type" => "Expense", "category" => "Utilities", "amount" => 150, "description" => "Utility bills"],
                        ["date" => "2023-12-05", "type" => "Expense", "category" => "Entertainment", "amount" => 200, "description" => "Movie tickets"]
                    ];

                    // Output data of each row
                    foreach($transactions as $transaction) {
                        echo "<tr>
                                <td>" . $transaction["date"] . "</td>
                                <td>" . $transaction["type"] . "</td>
                                <td>" . $transaction["category"] . "</td>
                                <td>" . $transaction["amount"] . "</td>
                                <td>" . $transaction["description"] . "</td>
                             </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php include 'common/footer.html'; ?>
    </body>

</html>
