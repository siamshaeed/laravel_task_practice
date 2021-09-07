@extends('frontEnd.master')

@section('title')
    All Product | CRUD
@endsection

@section('allDataBody')
				<div class="myBody">
					<div class="readTable">
						<h2 class="readTitle">Student List</h2>
						<table class="table table-hover table-striped text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Depertment</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    <tr>
									<td>Shaeed Al Hasan Siam</td>
									<td>siamshaeed@gmail.com</td>
									<td>01787972797</td>
									<td>cse</td>
									<td>
                                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
@endsection

