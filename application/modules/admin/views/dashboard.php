
<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <a href="<?=admin_url("reports")?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file-excel fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<style>
  .box-info li {
	padding: 24px;
	background: #fff;
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
.box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
 .box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}
.box-info li:nth-child(3) .bx {
	background: var(--light-orange);
	color: var(--orange);
}
 .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
 .box-info li .text p {
	color: var(--dark);	
}
.box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}

  </style>
<ul class="box-info">
				<li>
        <i class='bx bx-task'></i>
					<span class="text">
						<h3>1020</h3>
						<p>In-Stock</p>
					</span>
				</li>
				<li>
        <i class='bx bx-task-x' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>	Out of Stock</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$<?=number_format($sales,2)?></h3>
						<p>Sales</p>
					</span>
				</li>
					<li>
          <i class='bx bxl-product-hunt'></i>
					<span class="text">
						<h3><?=$products;?></h3>
						<p>products</p>
					</span>
				</li>
					<li>
          <i class='bx bx-group'></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Costomers</p>
					</span>
				</li>	<li>
        <i class='bx bxs-bell'></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Orders</p>
					</span>
				</li>
			</ul>

