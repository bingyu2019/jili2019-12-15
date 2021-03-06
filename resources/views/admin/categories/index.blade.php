@extends('layouts.app')
@section('title',Auth::user()->name.'分类列表')
@section('content')
  @include('admin.layouts._header')

  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">分 类 列 表</h3>
      <a href="{{ route('admin.categories.create') }}" class="btn btn-success float-right mr-5" role="button" aria-pressed="true"
         style="width: 130px;">添加分类</a>
    </div>

    <table class="table table-striped table-bordered mt-2 card-header">
      <thead>
      <tr>
        <th scope="col">
          <button type="button" class="btn btn-danger float-left" style="width: 120px;">批量删除</button>
        </th>
        <th scope="col"><h5>总数: 6 </h5></th>
        <th scope="col"><a href="" class="btn btn-outline-secondary">上一页</a> <a href=""
                                                                                class="btn btn-outline-secondary">下一页</a>
          &nbsp;
          <input type="text" class="pb-1 text-center"
                 style="width: 80px;height: 36px;border-radius: 5px;font-size: 18px;"> / 1
        </th>
        <th scope="col" class="float-right" style="font-size: 18px;">
          <a href="" class="btn btn-outline-secondary pb-1">刷新</a>
          <input type="number" class="text-center pb-1"
                 style="width: 80px;height: 36px;border-radius: 5px;font-size: 18px;"> 条目每页
        </th>
      </tr>
      </thead>
    </table>

    <form action="">
      <table class="table table-bordered table-hover mt-2 admin-all-index">
        <thead>
        <tr class="card-header" style="font-size: 18px;">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          </th>
          <th scope="col">ID</th>
          <th scope="col">类名</th>
          <th scope="col">描述</th>
          <th scope="col">级别</th>
          <th scope="col">顶级类名</th>
          <th scope="col">父级类名</th>
          <th scope="col">编辑日期</th>
          <th scope="col">操作者</th>
          <th scope="col">状态</th>
          <th scope="col">管理</th>
        </tr>
        </thead>

        <tbody>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>1</td>
          <td>人物经历</td>
          <td>供所有用户书写经历赚取版税</td>
          <td>0</td>
          <td>人物经历</td>
          <td>人物经历</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td>
<<<<<<< HEAD
{{--            <a href="{{ route('admin.categories.edit') }}" class="btn btn-success btn-sm">编辑</a> --}}
=======
{{--            <a href="{{ route('admin.categories.edit') }}" class="btn btn-success btn-sm">编辑</a>--}}
>>>>>>> 442a44c6a47968f692b67a6ff60c63ef6c68f327
            <a href="" class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>


        </tbody>
      </table>
      <br>
    </form>
    <br><br><br>
  </div>

@endsection

