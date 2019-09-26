<script type="text/javascript">
	try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo $baseURL ; ?>home">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
		
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-wheelchair"></i>
				<span class="menu-text">
					Pasien
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>

			<ul class="submenu">

				<li class="">
					<a href="pasien/data_pasien"><i class="menu-icon fa fa-caret-right"></i>Data Pasien</a>
				</li>
				<b class="arrow"></b>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text">
							Riwayat Pasien
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>

					<ul class="submenu">

						<li class="">
							<a href="pasien/data_periksa"><i class="menu-icon fa fa-caret-right"></i>Periksa</a>
						</li>
						<li class="">
							<a href="pasien/data_obat"><i class="menu-icon fa fa-caret-right"></i>Obat</a>
						</li>
						<b class="arrow"></b>

					</ul>
				</li>	
			</ul>
		</li>
		
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user-md"></i>
				<span class="menu-text">
					Dokter
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>

			<ul class="submenu">
				
				<li class="">
					<a href="dokter/data_dokter"><i class="menu-icon fa fa-caret-right"></i>Data Dokter</a>
				</li>
				<li class="">
					<a href="dokter/data_jadwal_dokter"><i class="menu-icon fa fa-caret-right"></i>Jadwal</a>
				</li>
				<li class="">
					<a href="doket/data_pasien_dokter"><i class="menu-icon fa fa-caret-right"></i>Pasien</a>
				</li>
				<b class="arrow"></b>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-medkit"></i>
				<span class="menu-text">
					Farmasi
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>

			<ul class="submenu">
				
				<li class="">
					<a href="farmasi/data_apoteker"><i class="menu-icon fa fa-caret-right"></i>Data Apoteker</a>
				</li>
				<li class="">
					<a href="farmasi/data_obat"><i class="menu-icon fa fa-caret-right"></i>Data Obat</a>
				</li>
				<b class="arrow"></b>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-money"></i>
				<span class="menu-text">
					Keuangan
				</span>
			</a>
		</li>

	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>