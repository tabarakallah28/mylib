<?= $this->extend('main') ?>

<?= $this->section('content') ?>


				<!-- page content -->
			<div class="right_col" role="main">
			<!-- top tiles -->
			<div class="row">
				<div class="col-12">
					<div class="tile_count">
						<div class="row" >
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Staff</span>
								<div class="count"><?=$qstaff?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-clock-o"></i> Borrower</span>
								<div class="count"><?=$qstaff?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Book</span>
						   	     <div class="count"><?=$qbook?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Publisher</span>
								<div class="count"><?=$qpublisher?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Category</span>
								<div class="count"><?=$qcategory?></div>
							</div>
							<div class="col-md-2  tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Borrow</span>
								<div class="count"><?=$qborrow?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /top tiles -->

			
			<br />

			<div class="row">


				<div class="col-md-12 col-sm-12 ">
				<div class="x_panel tile fixed_height_320">
					<div class="x_title">
					<h2>Category</h2>
					<div class="clearfix"></div>
					</div>
					<div class="x_content">
					<h4>Daftar Book</h4>
					<div class="widget_summary">
						<div class="w_left w_25">
						<span>Pelajaran</span>
						</div>
						<div class="w_center w_55">
						<div class="progress">
							<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</div>
						<div class="w_right w_20">
						<span>123k</span>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="widget_summary">
						<div class="w_left w_25">
						<span>Novel</span>
						</div>
						<div class="w_center w_55">
						<div class="progress">
							<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</div>
						<div class="w_right w_20">
						<span>53k</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="widget_summary">
						<div class="w_left w_25">
						<span>Majalah</span>
						</div>
						<div class="w_center w_55">
						<div class="progress">
							<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</div>
						<div class="w_right w_20">
						<span>23k</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="widget_summary">
						<div class="w_left w_25">
						<span>Kejuruan</span>
						</div>
						<div class="w_center w_55">
						<div class="progress">
							<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</div>
						<div class="w_right w_20">
						<span>3k</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="widget_summary">
						<div class="w_left w_25">
						<span>Horror</span>
						</div>
						<div class="w_center w_55">
						<div class="progress">
							<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
							<span class="sr-only">60% Complete</span>
							</div>
						</div>
						</div>
						<div class="w_right w_20">
						<span>1k</span>
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
				</div>
			</div>
        </div>
        <!-- /page content -->
<?= $this->endsection() ?>
			