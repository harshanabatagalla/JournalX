<head>
	<!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/ollie.css">
</head>
<a href="Home.html">
		<input type="button" value="Home" name="Calculate_SLB" class="nav-link btn btn-primary">
</a>
<br>
<br>
<center>

<table border="1px" class="table table-bordered table-hover" style="width: 50%">
	<tr><td colspan="3" style="background-color: #818F8E;"><center><h2>Statement of Profit and Loss</h2></center></td></tr>
	<tr><td>Sales</td><td><?php $sales = (int)($_POST['SalesC'])+(int)($_POST['SalesD']); echo $sales; ?></td><td></td></tr>
	<tr><td>Sales returns</td><td><?php $sales_returns = (-1)*((int)($_POST['Return_InwardsC'])+(int)($_POST['Return_InwardsD'])); echo $sales_returns; ?></td><td></td></tr>
	<tr><td></td><td></td><td><?php $result_sale_tmp = ((int)$sales+(int)$sales_returns); echo  $result_sale_tmp ?></td></tr>

	<tr><td><b>Cost of sales</b></td><td></td><td></td></tr>
	<tr><td>Opening Inventory</td><td><?php $opening_inv_var = (int)($_POST['opening_inv']) ; echo $opening_inv_var?></td><td></td></tr>
	<tr><td>Purchases</td><td><?php $Purchase = (int)($_POST['PurchaseD'])+(int)($_POST['PurchaseC']); echo $Purchase; ?></td><td></td></tr>
	<tr><td>Purchase returns</td><td><?php $Return_outwards = (-1)*((int)($_POST['Return_outwardsD'])+(int)($_POST['Return_outwardsC'])); echo $Return_outwards; ?></td><td></td></tr>
	<tr><td>Carriage inwards</td><td><?php $carryin = (int)($_POST['carryinD'])+(int)($_POST['carryinC']); echo $carryin; ?></td><td></td></tr>
	<tr><td>Closing Inventory</td><td><?php $cinvtry = (-1)*((int)($_POST['cinventoryD'])+(int)($_POST['cinventoryC'])); echo $cinvtry; ?></td><td></td></tr>
	<tr><td><b>Total Cost of Sales</b></td><td></td><td><?php $total_costSales = $opening_inv_var + $Return_outwards + $carryin + $cinvtry + $Purchase; echo $total_costSales;?></td></tr>
	<tr><td><b>Gross Profit</b></td><td></td><td><?php $gross_profit = $result_sale_tmp - $total_costSales; echo $gross_profit?></td></tr>

	<tr><td><b><u>Other incomes</u></b></td><td></td><td></td></tr>
	<tr><td>Rent income</td><td><?php $rent_rec = (int)($_POST['rentInD']) + (int)($_POST['rentInC']); echo $rent_rec;?></td><td></td></tr>
	<tr><td>Discounts recieved</td><td><?php $dist_rec = (int)($_POST['Discount_receivedD']) + (int)($_POST['Discount_receivedC']); echo $dist_rec;?></td><td></td></tr>
	<tr><td>Commision Recieved</td><td><?php $comm_rec = (int)($_POST['commID']) + (int)($_POST['commIC']); echo $comm_rec;?></td><td></td></tr>
	<tr><td></td><td></td><td><?php $total_incomes = $rent_rec + $dist_rec + $comm_rec; echo  $total_incomes;?></td></tr>

	<tr><td><b>Administrative Expenses</b></td><td></td><td></td></tr>
	<tr><td>Salaries</td><td><?php $salaries = (int)($_POST['SalariesD']) + (int)($_POST['SalariesC']); echo $salaries;?></td><td></td></tr>
	<tr><td>Electricity</td><td><?php $electricity = (int)($_POST['ElectricityD']) + (int)($_POST['ElectricityC']); echo $electricity;?></td><td></td></tr>
	<tr><td>Water</td><td><?php $wBill = (int)($_POST['wBillD']) + (int)($_POST['wBillC']); echo $wBill;?></td><td></td></tr>
	<tr><td>Insurance</td><td><?php $Insurance = (int)($_POST['InsuranceD']) + (int)($_POST['InsuranceC']); echo $Insurance;?></td><td></td></tr>
	<tr><td></td><td></td><td><?php $total_admin_exp = $salaries + $electricity + $wBill + $Insurance; echo $total_admin_exp ; ?></td></tr>

	<tr><td><b>Sales and Distribution Expeneses</b></td><td></td><td></td></tr>
	<tr><td>Carriage Outwards</td><td><?php $Carriage_outwards = (int)($_POST['Carriage_outwardsD']) + (int)($_POST['Carriage_outwardsC']); echo $Carriage_outwards;?></td><td></td></tr>
	<tr><td>Advertising exp</td><td><?php $Advertisement = (int)($_POST['AdvertisementD']) + (int)($_POST['AdvertisementC']); echo $Advertisement;?></td><td></td></tr>
	<tr><td>Freight charges</td><td><?php $fcharges = (int)($_POST['fchargesD']) + (int)($_POST['fchargesC']); echo $fcharges;?></td><td></td></tr>
	<tr><td>Motor Expenses</td><td><?php $mExp = (int)($_POST['mExpD']) + (int)($_POST['mExpC']); echo  $mExp; ?></td><td></td></tr>
	<tr><td></td><td></td><td><?php $total_sales_dist_exp = $Carriage_outwards + $Advertisement + $fcharges + $mExp; echo $total_sales_dist_exp; ?></td></tr>

	<tr><td><b>Financial Expenses</b></td><td><?php $Bank_charges = (int)($_POST['Bank_chargesD']) + (int)($_POST['Bank_chargesC'])?></td><td></td></tr>
	<tr><td>Bank charges</td><td><?php $Bank_charges = (int)($_POST['Bank_chargesD']) + (int)($_POST['Bank_chargesC']); echo $Bank_charges;?></td><td></td></tr>
	<tr><td>Loan interest</td><td><?php $LInterest = (int)($_POST['LInterestD']) + (int)($_POST['LInterestC']); echo $LInterest;?></td><td></td></tr>
	<tr><td>Overdraft Interest</td><td><?php $odint = (int)($_POST['odintD']) + (int)($_POST['odintC']); echo $odint;?></td><td></td></tr>
	<tr><td></td><td></td><td><?php $total_financial_exp = $Bank_charges + $LInterest + $odint ; echo $total_financial_exp ; ?></td></tr>

	<tr><td><b><font color='#ff5050' size="5">Net Profit</font></b></td><td></td><td><?php $net_profit =  $gross_profit + $total_incomes - $total_admin_exp - $total_sales_dist_exp - $total_financial_exp ; echo "<b>".$net_profit."</b>"; ?></td></tr>

</table>
<br>

<hr style="border: 3px solid #818F8E">

	<!-- Statement of Financial Position -->

<table border="1px" class="table table-bordered table-hover" style="width: 50%">
	<tr><td colspan="3" style="background-color: #818F8E;"><center><h2>Statement of Financial Position</h2></center></td></tr>
	<tr><td><center><font size="5" color="#75a3a3"><b>Assets</b></font></center></td><td></td><td></td></tr>
	<tr><td><b>Non-current Assets</b></td><td></td><td></td></tr>
	<tr><td>Motor Vehicle</td><td><?php $mvehicle = (int)($_POST['mvehicleD']) + (int)($_POST['mvehicleC']); echo $mvehicle;?></td><td></td></tr>
	<tr><td>Plant and Machinery</td><td><?php $machinery = (int)($_POST['machineryD']) + (int)($_POST['machineryC']); echo $mvehicle;?></td><td></td></tr>
	<tr><td>Building</td><td><?php $Building = (int)($_POST['BuildingD']) + (int)($_POST['BuildingC']); echo $Building;?></td><td></td></tr>
	<tr><td>Land</td><td><?php $Land = (int)($_POST['LandD']) + (int)($_POST['LandC']); echo $mvehicle;?></td><td></td></tr>
	<tr><td>Delivery Van</td><td><?php $dvan = (int)($_POST['dvanD']) + (int)($_POST['dvanC']); echo $dvan;?></td><td></td></tr>
	<tr><td><b>Total Non-current assets</b></td><td></td><td><?php $total_nc_assets = $mvehicle + $machinery + $Building + $Land + $dvan; echo $total_nc_assets;?></td></tr>
	<tr><td></td><td></td><td></td></tr>

	<tr><td><b>Current-Assets</b></td><td></td><td></td></tr>
	<tr><td>Closing Inventory</td><td><?php $cinvtry = (int)($_POST['cinventoryD'])+(int)($_POST['cinventoryC']); echo $cinvtry; ?></td><td></td></tr>
	<tr><td>Cash at Bank</td><td><?php $Bank = (int)($_POST['BankD'])+(int)($_POST['BankC']); echo $Bank; ?></td><td></td></tr>
	<tr><td>Debtors</td><td><?php $debtors = (int)($_POST['debtorsD'])+(int)($_POST['debtorsC']); echo $debtors; ?></td><td></td></tr>
	<tr><td><b>Total Current-Assets: </b></td><td></td><td><?php $total_c_assets = $cinvtry + $Bank + $debtors; echo $total_c_assets;?></td></tr>
	<tr><td><font color='#ff5050' size="4"><b>Total assets: </b></font></td><td></td><td><?php $total_assets = $total_nc_assets + $total_c_assets; echo "<font color='#ff5050' size='4'>".$total_assets."</font>"; ?></td></tr>

	<tr><td><center><font size="5" color="#75a3a3"><b>Equity & Liabilities</b></font></center></td><td></td><td></td></tr>
	<tr><td><b>Owner's Equity</b></td><td></td><td></td></tr>
	<tr><td>capital</td><td><?php $Equity = (int)($_POST['EquityD'])+(int)($_POST['EquityC']); echo $Equity; ?></td><td></td></tr>
	<tr><td>Drawings</td><td><?php $Drawings = (-1)*((int)($_POST['DrawingsD'])+(int)($_POST['DrawingsC'])); echo $Drawings; ?></td><td></td></tr>
	<tr><td>Net Profit</td><td><?php echo $net_profit; ?></td><td></td></tr>

	<tr><td><b>Non-Current Liabilities</b></td><td></td><td></td></tr>
	<tr><td>Bank Loan</td><td><?php $bloan = (int)($_POST['bloanD'])+(int)($_POST['bloanC']); echo $Equity; ?></td><td></td></tr>

	<tr><td><b>Current-Liabilities</b></td><td></td><td></td></tr>
	<tr><td>Creditors</td><td><?php $creditors = (int)($_POST['creditorsD'])+(int)($_POST['creditorsC']); echo $creditors; ?></td><td></td></tr>
	<tr><td><font color='#ff5050' size="3"><b>Total Equity & Liabilities</b></font></td><td></td><td><?php $total_eq_liabts = $Equity + $Drawings + $net_profit + $bloan + $creditors; echo "<font color='#ff5050' size='4'>".$total_eq_liabts."</font>"; ?></td></tr>

	<br>
	<br>
</table>
</center>