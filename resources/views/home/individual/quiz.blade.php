@extends('home.individual.parent.core')
@section('title', '个人资料')
@section('content')
	<div class="main-wrap">	 
	        <tr class="">
	            <th>标题:</th>
	        </tr>

	        @foreach($qwe as $a)

	        		<th>{{ $a->name }}</th>
	        @endforeach

</div>



		
@endsection