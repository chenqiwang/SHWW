@extends('home.individual.parent.core')
@section('title', '个人资料')
@section('content')
	<div class="main-wrap">
			<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改密码</strong></div>
						</div>
						<hr/>

						<!--头像 -->
							@if(session('msg'))
									<script>
										alert("{{ session('msg') }}");
									</script>
									@endif
					<form class="am-form am-form-horizontal" method='get' action="{{ url('mima/') }}">
									
									<!-- {{ method_field('PUT') }} -->
									<!-- <div>
									新密码：<input type="" name="pwd">
									</div><hr> -->
									<div>
										确认新密码：<input type="" name="pwd">
									</div><hr>
									<input type="submit" class="am-btn am-btn-danger" value="保存修改">
						
					</form>
						<div class="am-form-group safety">
							
							<div class="am-form-content safety">

							</div>
						</div>		
			</div>					
	</div>

		
@endsection