<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Portofolio Tracker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="
sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css
" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="
sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="date"],
        select,
         {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}
.header--title {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header--title h2 {
    margin: 0;
    font-size: 24px;
    color: #333; /* Adjust color as needed */
}

.header--title li {
    margin-left: 20px;
    display: inline-block;
}

.header--title li a {
    text-decoration: none;
    color: #666; /* Adjust color as needed */
    font-weight: bold;
}

.header--title li a:hover {
    color: green; /* Adjust color for hover state */
}
 
    </style>
</head>
<body>
<div class="sidebar">
        <div class="logo">Logo</div>
        <ul class="menu">
            <li class="active">
                <a href="Dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="register.html">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="Service.php">
                    <i class="fas fa-list"></i>
                    <span>All Tracker</span>
                </a>
                
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-folder-open"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Investment Portfolio Tracker</h2>
                
                <li><a href="portofolio_read_insert.php">Portofolio</a></li>
                <li><a href="investment_read_insert.php">Investment</a></li>
                <li><a href="transaction_read_insert.php">Transaction</a></li>
                <li><a href="performance_read_insert.php">Performance</a></li>
                <li><a href="stock_read_insert.php">Stock</a></li>
                <li><a href="bond_read_insert.php">Bonds</a></li>
                <li><a href="funds_read_insert.php">Mutual funds</a></li>
                <li><a href="Realestate_read_insert.php">Real Estate Investment</a></li>
                <li><a href="optioncontract_read_insert.php">Option Contract</a></li>
                <li><a href="commodities_read_insert.php">Commodities</a></li>
                <li><a href="portofolioallocation_read_insert.php">Portofolio Allocations</a></li>
            </div>
        </div>

        <div class="container">
        <h2>New Bonds</h2>
        <form action="bond_read_insert.php" method="post">
    <label for="bond_name">Bond Name:</label>
    <input type="text" id="bond_name" name="bond_name" required>

    <label for="issuer">Issuer:</label>
    <input type="text" id="issuer" name="issuer" required>

    <label for="maturity_date">Maturity Date:</label>
    <input type="date" id="maturity_date" name="maturity_date" required>

    <label for="coupon_rate">Coupon Rate:</label>
    <input type="text" id="coupon_rate" name="coupon_rate" step="0.01" required>

    <label for="yield_to_maturity">Yield to Maturity:</label>
    <input type="text" id="yield_to_maturity" name="yield_to_maturity" step="0.01" required>

    <label for="credit_rating">Credit Rating:</label>
    <select id="credit_rating" name="credit_rating" required>
        <option value="AAA">AAA</option>
        <option value="AA">AA</option>
        <option value="A">A</option>
        <option value="BBB">BBB</option>
        <option value="BB">BB</option>
        <option value="B">B</option>
        <option value="CCC">CCC</option>
        <option value="CC">CC</option>
        <option value="C">C</option>
    </select>

    <input type="submit" value="Submit">
</form>

</div>
    </div>
    
    
    
    <script>
        function confirmInsert() {
        return confirm('Are you sure you want to insert this record?');
        }
        </script>
</body>

</html>
