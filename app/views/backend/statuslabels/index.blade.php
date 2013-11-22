@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Status Labels
@parent
@stop

{{-- Page content --}}
@section('content')
<div id="pad-wrapper" class="user-profile">
                <!-- header -->
				<h3 class="name">Status Labels
				<div class="pull-right">
					<a href="{{ route('create/statuslabel') }}" class="btn-flat success"><i class="icon-plus-sign icon-white"></i>  Create New</a>
				</div>
		</h3>


                <div class="row-fluid profile">
                    <!-- bio, new note & orders column -->
                    <div class="span9 bio">
                        <div class="profile-box">
                            <br>
                            <!-- checked out assets table -->

                            <table class="table table-hover">
							<thead>
								<tr>
									<th class="span4">@lang('admin/statuslabels/table.name')</th>
									<th class="span2"><span class="line"></span>@lang('table.actions')</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($statuslabels as $statuslabel)
								<tr>
									<td>{{ $statuslabel->name }}</td>
									<td>
										<a href="{{ route('update/statuslabel', $statuslabel->id) }}" class="btn-flat white"> @lang('button.edit')</a>
										<a class="btn-flat danger delete-asset" data-toggle="modal" href="{{ route('delete/statuslabel', $statuslabel->id) }}" data-content="Are you sure you wish to delete the  {{ $statuslabel->name }} status label?" data-title="Delete {{ $statuslabel->name }}?" onClick="return false;">@lang('button.delete')</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

                        </div>
                    </div>

                    <!-- side address column -->
                    <div class="span3 address pull-right">
						<br><br>
						<h6>About Status Labels</h6>
						<p>Status labels are used to describe the various reasons why an asset <strong><em>cannot</em></strong> be deployed. </p>

						<p>It could be broken, out for diagnostics, out for
						repair, lost or stolen, etc. Status labels allow your team to show the progression.</p>

                    </div>
@stop




