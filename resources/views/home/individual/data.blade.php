@extends('home.individual.parent.core')
@section('title', '个人资料')
@section('content')
	<div class="main-wrap">
			<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong></div>
						</div>
						<hr/>

						<!--头像 -->
							@if(session('msg'))
									<script>
										alert("{{ session('msg') }}");
									</script>
									@endif
					<form class="am-form am-form-horizontal" action="{{ URL('data/'.$ser->id) }}" method='post' enctype="multipart/form-data">
									{{ csrf_field() }}
									{{ method_field('PUT') }}
						<div class="user-infoPic">
							

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*" name="photo">
								<img class="am-circle am-img-thumbnail" src="{{ asset('./pic/'.$ser->photo) }}"  />
							</div>	

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i>{{ $ser->nickname }}</i></b></div>
								<div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
						            </span>
								</div>
								<div class="u-safety">
									<a href="safety.html">
									 账户安全
									<span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">60分</i></span>
									</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
						
						<div class="info-main">
								
								<div class="am-form-group">
									<label for="user-name2" class="am-form-label">昵称</label>
									<div class="am-form-content">
										<input type="text" id="user-name2"  name="nickname" value="{{ $ser->nickname }}">

									</div>
								</div>

								<div class="am-form-group">
									<label for="user-name" class="am-form-label">姓名</label>
									<div class="am-form-content">
										<input type="text" name="name" value="{{ $ser->name }}">

									</div>
								</div>

								<div class="am-form-group">
									<label class="am-form-label">性别</label>
									<div class="am-form-content sex">
										<label class="am-radio-inline">
											<input type="radio" value="1" @if($ser->sex==1) selected @endif> 男
										</label>
										<label class="am-radio-inline">
											<input type="radio"  value="0" @if($ser->sex==0) selected @endif> 女
										</label>
										
									</div>
								</div>

									<div class="am-form-group">
									<label for="user-email" class="am-form-label">电子邮件</label>
									<div class="am-form-content">
										<input id="user-email" name="email" value="{{ $ser->email }}" type="email">

									</div>
								</div>
									<input type="submit" class="am-btn am-btn-danger" value="保存修改">
						
							</form>
								<div class="am-form-group safety">
									
									<div class="am-form-content safety">

									</div>
								</div>
						
							<!-- <div class="info-btn">	
								<a href="{{ URL('data/'.$ser->id.'/update') }}">
									<button class="am-btn am-btn-danger">保存修改</button>
									</a>	
								</div> -->
						</div>
							
					</div>
				</div>

		
@endsection