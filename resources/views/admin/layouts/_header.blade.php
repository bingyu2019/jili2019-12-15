<header class="admin-header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-light" href=""><h4>灵魂深触-经历网</h4></a>
    <h5 class="text-white-50">把有限的生命投入到无限的为人民服务之中去！——雷锋</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse offset-4" id="navbarNavDropdown">

      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link mt-1 font-weight-bold" href="">
              <i class="fa fa-plus"></i>
            </a>
          </li>

          <li class="nav-item notification-badge mt-2">
            <h3><a
                class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                href="">1
                {{--                            {{ Auth::user()->notification_count }}--}}
              </a></h3>
          </li>

          <li class="nav-item dropdown img-dropdown-menu">
            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" height="40px" width="40px"
                   style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc;" alt="头像">
              {{ Auth::user()->name }}
            </a>

            <div class="lg-other-header-menu dropdown-menu text-center" aria-labelledby="navbarDropdown">
              {{--                            @can('manage_contents')--}}
              <a class="dropdown-item" href="{{ route('root') }}">
                前台首页
              </a>
              <div class="dropdown-divider"></div>
              {{--                            @endcan--}}
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                个人中心
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="">
                我的钱袋
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                编辑资料
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="">
                系统公告
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0);" class="btn btn-danger btn-lg active btn-del-login" role="button"
                 aria-pressed="true" style="width: 100%;"><h5>退出</h5></a>
            </div>
          </li>
        @endguest
      </ul>

    </div>
  </nav>
  <div class="admin-info" style="width: 100%;z-index: 1;position: fixed;">
    <table class="table table-striped table-hover table-dark">
      <tbody class="ml-5">
      <tr>
        <th><h5 class="ml-5">用户与权限 ➛ </h5></th>
        <td><a href="{{ route('admin.users.index') }}" class="ml-5">👤 用户 </a>  <a href="{{ route('admin.admin.index') }}">👤管理员</a></td>
        <td><a href="{{ route('admin.permissions.index') }}" class="ml-5">🔐权限管理 </a> &nbsp;<a href="{{ route('admin.roles.index') }}"> 🔏角色管理</a></td>
        <td><a href="" class="ml-5">💻 站点配置</a></td>
      </tr>
      <tr>
        <th><h5 class="ml-5">分类管理&nbsp;&nbsp;&nbsp; ➛ </h5></th>
        <td><a href="{{ route('admin.categories.index') }}" class="ml-5">所有分类</a></td>
        <td><a href="{{ route('admin.categories.create') }}" class="ml-5">新增分类</a></td>
        <td><a href="{{ route('admin.categories.edit') }}" class="ml-5">编辑分类</a></td>
      </tr>
      <tr>
        <th><h5 class="ml-5">财务管理&nbsp;&nbsp;&nbsp; ➛ </h5></th>
        <td><a href="" class="ml-5">🌺点赞 </a> <a href=""> 💰打赏 </a> <a href=""> 🎁礼赞</a></td>
        <td><a href="" class="ml-5">📚人物经历 </a> <a href=""> 💐灵魂展览馆</a></td>
        <td><a href="" class="ml-5">📡收入明细 </a> <a href=""> 📖支出明细</a></td>
      </tr>
      <tr>
        <th><h5 class="ml-5">内容管理&nbsp;&nbsp;&nbsp; ➛</h5></th>
        <td><a href="{{ route('admin.topics.index') }}" class="ml-5">📜 帖子管理</a></td>
        <td><a href="{{ route('admin.replies.index') }}" class="ml-5">💬 回复管理 </a> &nbsp; <a href="{{ route('notifications.users') }}"> 🔔 用户消息</a> <a href="{{ route('notifications.system') }}" class="ml-2">📩 系统通知 </a></td>
        <td><a href="" class="ml-5">🌁 图片管理</a></td>
      </tr>
      <tr>
        <th><h5 class="ml-5">运营管理&nbsp;&nbsp;&nbsp; ➛</h5></th>
        <td><a href="" class="ml-5">系统统计</a></td>
        <td><a href="" class="ml-5">系统管理</a></td>
        <td><a href="" class="ml-5"></a></td>
      </tr>
      </tbody>
    </table>
  </div>
</header>

{{--@section('script')--}}
{{--  <script>--}}

{{--      $(document).ready(function () {--}}
{{--      // 退出登录确认按钮--}}
{{--          $('.btn-del-login').click(function () {--}}
{{--              swal({--}}
{{--                  title: "您确认要退出吗？",--}}
{{--                  icon: "warning",--}}
{{--                  buttons: ['取消', '确定'],--}}
{{--                  dangerMode: true,--}}
{{--              })--}}
{{--                  .then(function (willDelete) { // 用户点击按钮后会触发这个回调函数--}}
{{--                      if (!willDelete) {--}}
{{--                          return;--}}
{{--                      }--}}
{{--                      axios.post(`{{ route('logout') }}`)--}}
{{--                          .then(function () {--}}
{{--                              location.reload();--}}
{{--                          })--}}
{{--                  });--}}
{{--          });--}}

{{--      });--}}
{{--  </script>--}}
{{--@endsection--}}
