@extends('admin.layouts.app', ['title' => 'User'])

@section('header')
    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-hover table-bordered ">
            <thead class="thead-light">
            <tr>
                <th scope="col" style="text-align: center;width: 6%">No.</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col" style="width: 15%;text-align: center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $no => $user)
                <tr>
                    <th scope="row" style="text-align: center">{{ ++$no }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $role)
                                <label class="badge badge-success">{{ $role }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td class="text-center">
                        {{-- @can('users.edit')
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        @endcan
                        
                        @can('users.delete')
                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $user->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endcan --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
        {{-- <div style="text-align: center">
        </div> --}}
    </div>

@endsection


