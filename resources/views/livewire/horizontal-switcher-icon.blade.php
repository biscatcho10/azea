

@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Switcher css -->
		<link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>

@endsection

@section('content')

        <!--Page header-->
		<div class=" container">
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-10">
				<div class="page-header">
					<div class="page-leftheader">
						<h4 class="page-title mb-0 text-primary">Switcher Icon</h4>
					</div>
					<div class="page-rightheader">
						<div class="d-flex">
							<button type="button" class="demo-icon btn bg-primary btn-icon">
								<svg xmlns="http://www.w3.org/2000/svg" class="switcher-icon fa-spin" width="18" height="18" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"/><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"/></svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--End Page header-->
 			<!-- Switcher -->
			 <div class="switcher-wrapper">
				<div class="demo_changer">
					<div class="form_holder sidebar-right1">
						<div class="row">
							<div class="predefined_styles">
								<div class="swichermainleft mb-4">
									<h4>Navigation Style</h4>
									<div class="ps-3 pe-3 pt-3 d-grid gap-2">
										<a class="btn btn-primary " href="{{url('index')}}"> Dashboard</a>
									</div>
								</div>
								<div class="swichermainleft text-center">
									<h4>LTR AND RTL VERSIONS</h4>
									<div class="switch_section p-4">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">LTR</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch54" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
												<label for="myonoffswitch55" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Theme Style</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">Light Theme</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
													<label for="myonoffswitch1" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Dark Theme</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
													<label for="myonoffswitch2" class="onoffswitch2-label"></label>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Header Styles</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">Light Header</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
													<label for="myonoffswitch6" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Color Header</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
													<label for="myonoffswitch7" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Dark Header</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
													<label for="myonoffswitch8" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Gradient Header</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
													<label for="myonoffswitch26" class="onoffswitch2-label"></label>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Horizantal menu styles</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">Light Menu</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch19" id="background7" class="onoffswitch2-checkbox">
													<label for="background7" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Color Menu</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch19" id="background8" class="onoffswitch2-checkbox">
													<label for="background8" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Dark Menu</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch19" id="background9" class="onoffswitch2-checkbox">
													<label for="background9" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Gradient Menu</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch19" id="background13" class="onoffswitch2-checkbox">
													<label for="background13" class="onoffswitch2-label"></label>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Layout Width Styles</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">Full Width</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox">
													<label for="myonoffswitch9" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Boxed</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
													<label for="myonoffswitch10" class="onoffswitch2-label"></label>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Layout Positions</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">Fixed</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox">
													<label for="myonoffswitch11" class="onoffswitch2-label"></label>
												</a>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Scrollable</span>
												<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
													<label for="myonoffswitch12" class="onoffswitch2-label"></label>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Switcher -->

@endsection('content')

@section('scripts')

	    <!-- Switcher js -->
		<script src="{{asset('assets/switcher/js/switcher1.js')}}"></script>

		<!-- Custom js-->
		<script src="{{asset('assets/js/custom1.js')}}"></script>

@endsection