@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Flex</h4>
							</div>
							<div class="page-rightheader">
								<div class="btn-list">
									<button class="btn btn-outline-primary"><i class="fe fe-download"></i>
										Import</button>
									<a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
									<div class="dropdown-menu border-0">
											<a class="dropdown-item" href="javascript:void(0);">Today</a>
											<a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
											<a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
											<a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
											<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
											<a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
											<a class="dropdown-item" href="javascript:void(0);">Last year</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Enable Flex
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex p-3 bg-light">
											I'm a flexbox container!
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Direction
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row-reverse bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Justify Content
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row justify-content-left bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-right bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-center bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-around bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Align Items
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row align-items-left bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-center bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-right bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-stretch bg-light h-9">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Align Self
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100 align-self-left">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200 align-self-center">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300 align-self-right">
													Flex item 3
												</div>
												<div class="p-3 bg-gray-400 align-self-stretch">
													Flex item 4
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Fill
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-fill">
													Flex item with a lot of content
												</div>
												<div class="p-3 bg-gray-200 flex-fill">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 flex-fill">
													Flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Grow and Shrink
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-grow-1">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Auto Margins
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 mg-l-auto">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 order-3">
													First Item
												</div>
												<div class="p-3 bg-gray-200 order-2">
													Second Item
												</div>
												<div class="p-3 bg-gray-300 order-1">
													Third Item
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('scripts')

@endsection