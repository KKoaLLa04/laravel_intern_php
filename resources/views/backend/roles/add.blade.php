@extends('backend.layout')

@section('content')
    <h1>Thêm chức vụ mới</h1>
    <a href="{{route('admin.roles.index')}}" class="btn btn-success">Quay lại</a>
    <hr>
    <form action="{{route('admin.roles.post_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(!empty($errors->any()))
            <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
        @endif

        @if(!empty(session('msg')))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Tên chức vụ</label>
                    <input type="text" class="form-control" placeholder="Tên chức vụ...." name="name" value="{{old('name')}}">
                    @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả chức vụ</label>
                    <textarea class="form-control" name="display_name" placeholder="Mô tả chức vụ...">{{old('display_name')}}</textarea>
                    @error('display_name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th width="15%">Chức năng</th>
                        <th>Phân quyền</th>
                    </tr>
                </thead>

                <tbody>
                @if(!empty($permissionParent))
                    @foreach($permissionParent as $permissionParentItem)
                    <tr>
                        <td>{{$permissionParentItem->name}}</td>
                        <td>
                            <div class="row">
                                    @foreach($permissionParentItem->permissionChildren as $permissionChildrentItem)
                                    <div class="col-2">
                                        <input type="checkbox" value="{{$permissionChildrentItem->id}}" name="permission_id[]" id="permission_{{$permissionParentItem->name}}_{{$permissionChildrentItem->name}}">
                                        <label for="permission_{{$permissionParentItem->name}}_{{$permissionChildrentItem->name}}">{{$permissionChildrentItem->name}}</label>
                                    </div>
                                    @endforeach
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>


            <button class="btn btn-primary mb-3" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
