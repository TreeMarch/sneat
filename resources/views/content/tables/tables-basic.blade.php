@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="card-header" style="display: flex;flex-direction: row;justify-content: space-between">
          <h5>Table User</h5>
          <form action="" method="get">
            <div class="input-group input-group-sm " style="width: 150px">
              <input style="" type="text" name="key" id="search" class="form-control pull-left"
                     placeholder="...." value="{{request()->input('key')}}" >
              <span  class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>

          </form>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="userTable" class="table">
                <thead>
                    <tr>
                        <th>Id <a href=""><i class="fa-solid fa-caret-down"></i></a></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Create At</th>
                        <th>Actions</th>
                      </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td>{{ $user->created_at }}</td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      <div style="display:flex;justify-content:space-around;align-items:center;padding-top:12px">
        <div>
          {{ $users->links('vendor.pagination.paginate') }}
        </div>
        <div>
          Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of
          {{ $users->total() }} entries
        </div>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

@endsection

@section('footer');
