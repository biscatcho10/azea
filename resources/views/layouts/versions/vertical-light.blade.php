<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea – Laravel Admin & Dashboard Template" name="description">
		<meta content="Spruko Private Limited" name="author">
		<meta name="keywords" content="laravel ui admin template, laravel admin template, laravel dashboard template,laravel ui template, laravel ui, livewire, laravel, laravel admin panel, laravel admin panel template, laravel blade, laravel bootstrap5, bootstrap admin template, admin, dashboard, admin template">

		<!-- Title -->
		<title>Azea</title>

        @include('layouts.vertical.styles')

	</head>

	<body class="app sidebar-mini dark-mode">

        <!---Global-loader-->
        <div id="global-loader" >
            <img src="{{asset('assets/images/svgs/loader.svg')}}" alt="loader">
        </div>
        <!--- End Global-loader-->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

            @include('layouts.vertical.app-sidebar')

            @include('layouts.vertical.app-header')

                <!--app-content open-->
				<div class="app-content main-content">
					<div class="side-app">

                        @yield('content')

					</div>
				</div>
				<!-- CONTAINER END -->
            </div>

            @include('layouts.footer')

            @yield('modal')

		</div>

        @include('layouts.vertical.scripts')

	</body>
</html>
