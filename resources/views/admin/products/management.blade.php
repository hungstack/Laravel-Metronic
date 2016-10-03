@extends('admin.layouts.master')
@section('styles')
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/select2.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/datepicker.css') }}" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ asset('assets/global/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/admin/layout3/css/layout.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/admin/layout3/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color">
	<link href="{{ asset('assets/admin/layout3/css/custom.css') }}" rel="stylesheet" type="text/css">
	<!-- END THEME STYLES -->
@endsection
@section('content')	
<div class="container-fluid">
	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					 Widget settings form goes here
				</div>
				<div class="modal-footer">
					<button type="button" class="btn blue">Save changes</button>
					<button type="button" class="btn default" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<!-- BEGIN PAGE BREADCRUMB -->
	<ul class="page-breadcrumb breadcrumb">
		<li>
			<a href="#">Home</a><i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="ecommerce_products.html">Features</a>
			<i class="fa fa-circle"></i>
		</li>
		<li class="active">
			 Manage Products
		</li>
	</ul>
	<!-- END PAGE BREADCRUMB -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row">
		<div class="col-md-12">
			<div class="note note-danger note-bordered">
				<p>
					 NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
				</p>
			</div>
			<!-- Begin: life time stats -->
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift font-green-sharp"></i>
						<span class="caption-subject font-green-sharp bold uppercase">Products</span>
						<span class="caption-helper">manage products...</span>
					</div>
					<div class="actions">
						<div class="btn-group">
							<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
							<i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
							</a>							
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="javascript:;">
									Export to Excel </a>
								</li>
								<li>
									<a href="javascript:;">
									Export to CSV </a>
								</li>
								<li>
									<a href="javascript:;">
									Export to XML </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="javascript:;">
									Print Invoices </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-container">
						<div class="table-actions-wrapper">
							<span>
							</span>
							<select class="table-group-action-input form-control input-inline input-small input-sm">
								<option value="">Select...</option>
								<option value="publish">Publish</option>
								<option value="unpublished">Un-publish</option>
								<option value="delete">Delete</option>
							</select>
							<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
						</div>
						<table class="table table-striped table-bordered table-hover" id="datatable_products">
						<thead>
						<tr role="row" class="heading">
							<th width="1%">
								<input type="checkbox" class="group-checkable">
							</th>
							<th width="10%">
								 ID
							</th>
							<th width="15%">
								 Product&nbsp;Name
							</th>
							<th width="15%">
								 Category
							</th>
							<th width="10%">
								 Price
							</th>
							<th width="10%">
								 Quantity
							</th>
							<th width="15%">
								 Date&nbsp;Created
							</th>
							<th width="10%">
								 Status
							</th>
							<th width="10%">
								 Actions
							</th>
						</tr>
						<tr role="row" class="filter">
							<td>
							</td>
							<td>
								<input type="text" class="form-control form-filter input-sm" name="product_id">
							</td>
							<td>
								<input type="text" class="form-control form-filter input-sm" name="product_name">
							</td>
							<td>
								<select name="product_category" class="form-control form-filter input-sm">
									<option value="">Select...</option>
									<option value="1">Mens</option>
									<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Footwear</option>
									<option value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option>
									<option value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
									<option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion Outlet</option>
									<option value="6">Football Shirts</option>
									<option value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Premier League</option>
									<option value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Football League</option>
									<option value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serie A</option>
									<option value="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bundesliga</option>
									<option value="11">Brands</option>
									<option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adidas</option>
									<option value="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nike</option>
									<option value="14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airwalk</option>
									<option value="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA Pro</option>
									<option value="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kangol</option>
								</select>
							</td>
							<td>
								<div class="margin-bottom-5">
									<input type="text" class="form-control form-filter input-sm" name="product_price_from" placeholder="From"/>
								</div>
								<input type="text" class="form-control form-filter input-sm" name="product_price_to" placeholder="To"/>
							</td>
							<td>
								<div class="margin-bottom-5">
									<input type="text" class="form-control form-filter input-sm" name="product_quantity_from" placeholder="From"/>
								</div>
								<input type="text" class="form-control form-filter input-sm" name="product_quantity_to" placeholder="To"/>
							</td>
							<td>
								<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
									<input type="text" class="form-control form-filter input-sm" readonly name="product_created_from" placeholder="From">
									<span class="input-group-btn">
									<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
									</span>
								</div>
								<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
									<input type="text" class="form-control form-filter input-sm" readonly name="product_created_to " placeholder="To">
									<span class="input-group-btn">
									<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
									</span>
								</div>
							</td>
							<td>
								<select name="product_status" class="form-control form-filter input-sm">
									<option value="">Select...</option>
									<option value="published">Published</option>
									<option value="notpublished">Not Published</option>
									<option value="deleted">Deleted</option>
								</select>
							</td>
							<td>
								<div class="margin-bottom-5">									
									<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
									<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
								</div>
								<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
							</td>
						</tr>
						</thead>
						<tbody>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- End: life time stats -->
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>	
@endsection
@section('scripts')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin/layout3/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin/layout3/scripts/demo.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/global/scripts/datatable.js') }}"></script>
	<script src="{{ asset('assets/admin/pages/scripts/ecommerce-products.js') }} "></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
    	jQuery(document).ready(function() {    
    		var token = $("#_token").val();
			Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Demo.init(); // init demo features
			EcommerceProducts.init(token);
        });
    </script>
	<!-- END JAVASCRIPTS -->
@endsection