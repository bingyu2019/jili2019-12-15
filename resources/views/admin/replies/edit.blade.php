@extends('layouts.app')
@section('title',Auth::user()->name.'编辑回复')
@section('content')
  @include('admin.layouts._header')

  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>
          编辑回复
        </h4>
      </div>

      <div class="card-body">

        <form action="" method="POST"
              accept-charset="UTF-8"
              enctype="multipart/form-data">

          @include('shared._error')

          <div class="form-group">
            <label for="introduction-field">帖子标题</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>

          <div class="form-group">
            <label for="name-field">回复作者</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>

          <div class="form-group">
            <label for="email-field">回复内容</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="status-field">状态: &nbsp;</label>
            <input type="radio" name="status" value="1"/> 正常&nbsp;&nbsp;
            <input type="radio" name="status" value="0"/> 隐藏&nbsp;&nbsp;
            <input type="radio" name="status" value="-1"/> 删除
          </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保存</h5></button>
          </div>
        </form>
      </div>
    </div>
    <br><br><br>
  </div>

@endsection

