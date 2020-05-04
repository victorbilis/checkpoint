@php
	$headerClass = (!empty($headerInverse)) ? 'navbar-inverse ' : 'navbar-default ';
	$headerMenu = (!empty($headerMenu)) ? $headerMenu : '';
	$hiddenSearch = (!empty($headerLanguageBar)) ? 'hidden-xs' : '';
	$headerMegaMenu = (!empty($headerMegaMenu)) ? $headerMegaMenu : ''; 
@endphp
<!-- begin #header -->
<div id="header" class="header {{ $headerClass }}">
	<!-- begin navbar-header -->
	<div class="navbar-header">
		<a href="index.html" class="navbar-brand"><img src="/assets/img/logo/LogoCheckpoint.png" class="img-rounded height-30" /><b> Checkpoint</b> Admin</a>
		@if (!$sidebarHide)
		<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		@endif
		@if ($headerMegaMenu)
			<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
				<span class="fa-stack fa-lg text-inverse m-t-2">
					<i class="far fa-square fa-stack-2x"></i>
					<i class="fa fa-cog fa-stack-1x"></i>
				</span>
			</button>
		@endIf
	</div>
	<!-- end navbar-header -->
	
	@includeWhen($headerMegaMenu, 'includes.header-mega-menu')
	
	<!-- begin header-nav -->
	<ul class="navbar-nav navbar-right">
		
		@isset($headerLanguageBar)
		<li class="dropdown navbar-language">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<span class="flag-icon flag-icon-us" title="us"></span>
				<span class="name">EN</span> <b class="caret"></b>
			</a>
			<ul class="dropdown-menu p-b-0">
				<li class="arrow"></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-us" title="us"></span> English</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-cn" title="cn"></span> Chinese</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-jp" title="jp"></span> Japanese</a></li>
				<li><a href="javascript:;"><span class="flag-icon flag-icon-be" title="be"></span> Belgium</a></li>
				<li class="divider m-b-0"></li>
				<li class="text-center"><a href="javascript:;">more options</a></li>
			</ul>
		</li>
		@endisset
		<li class="dropdown navbar-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<img src="/assets/img/user/user-13.png" alt="" /> 
				<span class="d-none d-md-inline">Maria Braga</span> <b class="caret"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				
				<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>
		</li>
	</ul>
	<!-- end header navigation right -->
</div>
<!-- end #header -->
