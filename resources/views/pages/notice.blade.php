
	@extends('partials.master')
	@section('afterNav')
	<div class="pl-5 pr-5">
	<div class=" pl-3 " style="background:#00142d">
	<div class="pt-3">

	</div>


	<table class="table">
    <thead>
      <h3 class="text-center text-white" >Notice</h3>
    </thead>

		<tbody>
			@foreach($notice as $notice)
			<tr class="text-white">
				<td class="">
          <p class="text-success" style="width: 100px">{{$notice->created_at->format('d-m-Y')}}</p>
        </td>
				<td class="">
					<p style="text-align: justify; text-justify: inter-word; ">{{$notice->details}}</p>
				</td>
			</tr>
      <hr>
			@endforeach

		</tbody>
	</table>
	<div class="pt-2">

	</div>
	</div>
	</div>

	<div class="pt-4">

	</div>

	@endsection
