@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Switcher css -->
		<link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Switcher</h4>
							</div>
							<div class="page-rightheader">
							</div>
						</div>
						<!--End Page header-->
										<!-- Row -->
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4">
												<div class="card custom-switcher">
													<div class="card-header">
														<div class="card-title">Theme Settings</div>
													</div>
													<div class="card-body">
														<div class="switcher-wrapper">
															<div class="">
																<div class="form_holder sidebar-right1">
																	<div class="row">
																		<div class="">
																			<div class="swichermainleft">
																				<span class="font-weight-semibold">LTR AND RTL VERSIONS</span>
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
																				<span class="font-weight-semibold">THEME STYLES</span>
																				<div class="switch_section p-4">
																					<div class="switch-toggle d-flex mt-2">
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
																			<div class="swichermainleft">
																				<span class="font-weight-semibold">HEADER STYLES</span>
																				<div class="switch_section p-4">
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
																			<div class="swichermainleft">
																				<span class="font-weight-semibold">HORIZANTAL MENU STYLES</span>
																				<div class="switch_section p-4">
																					<div class="switch-toggle d-flex mt-2">
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
																			<div class="swichermainleft">
																				<span class="font-weight-semibold">LAYOUT WIDTH STYLES</span>
																				<div class="switch_section p-4">
																					<div class="switch-toggle d-flex mt-2">
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
																			<div class="swichermainleft">
																				<span class="font-weight-semibold">LAYOUT POSITIONS</span>
																				<div class="switch_section p-4">
																					<div class="switch-toggle d-flex mt-2">
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
												</div>
											</div>
											<div class="col-md-4"></div>
										</div>
										<!-- End Row -->

@endsection('content')

@section('scripts')

	    <!-- Switcher js -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

		<!-- Custom js-->
		<script src="{{asset('assets/js/custom1.js')}}"></script>

@endsection