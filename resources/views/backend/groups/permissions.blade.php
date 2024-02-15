@extends('backend.layout')

@section('content')
    <h1>Cập nhật nhóm người dùng: - {{$groupDetail->name}}</h1>
    <a href="{{route('admin.groups.homeController')}}" class="btn btn-success">Quay lại</a>
    <hr>
    @if(!empty($errors->any()))
        <div class="alert alert-danger">Có lỗi xảy ra, Vui lòng kiểm tra lại dữ liệu</div>
    @endif

    @if(session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <form action="{{route('admin.groups.permissions_post', $groupDetail)}}" method="POST">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th width="20%">Tiêu đề</th>
                    <th>Phân Quyền</th>
                </tr>
            </thead>

            <tbody>
                @if(!empty($modules))
                    @foreach($modules as $moduleKey => $moduleName)
                        <tr>
                            <td>{{$moduleName->title}}</td>
                            <td>
{{--                                <div class="row">--}}
{{--                                    @if(!empty($ruleAllow))--}}
{{--                                        @foreach($ruleAllow as $ruleName => $ruleLabel)--}}
{{--                                            <div class="col">--}}
{{--                                                <input type="checkbox" name="rule[{{$moduleName->name}}][]" id="rule_{{$moduleName->name}}_{{$ruleName}}" value="{{$ruleName}}" {{isRole($roleArr, $moduleName->name, $ruleName)?'checked':false}} /> <label for="rule_{{$moduleName->name}}_{{$ruleName}}">{{$ruleLabel}}</label>--}}
{{--                                            </div>--}}
{{--                                      @endforeach--}}
{{--                                    @endif--}}

{{--                                    @if($moduleName->name=='groups')--}}
{{--                                        <div class="col">--}}
{{--                                            <input type="checkbox" name="rule[{{$moduleName->name}}][]" id="rule_{{$moduleName->name}}_permission" value="permission" {{isRole($roleArr, $moduleName->name, 'permission')?'checked':false}} /> <label for="rule_{{$moduleName->name}}_permission">Phân quyền</label>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
                                <div class="row">
                                    @if(!empty($allPermission))
                                        @foreach($allPermission as $key => $per)
                                            @if($moduleName->id == $per->module_id)
                                                <div class="col-2">
                                                    @foreach($allRole as $roleKey => $roleName)
                                                        @if($roleName->id == $per->role_id)
                                                        <input type="checkbox" name="rule[{{$moduleName->name}}][]" value="{{$roleName->name}}" id="rule_{{$moduleName->name}}_{{$roleName->name}}" {{isRole($permissionArr, $moduleName->name, $roleName->name)?'checked':false}}/> <label for="rule_{{$moduleName->name}}_{{$roleName->name}}">{{$roleName->title}}</label>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Xác nhận</button>
    </form>
@endsection
