
	@extends('partials.master')
	@section('afterNav')
	<div class="pl-5 pr-5">
	<div class="bg-white pl-3 ">
	<div class="pt-3">

	</div>
	<b><h3 class="text-center">Recent Publications List</h3></b>
	 <div class="pt-2">

	 </div>
	<table class="table">
		<tbody>
			@foreach($research as $research)
			<tr>
				<th>{{$research->id}}</th>
				<td>
					<h5 class="display-5">Authors : {{$research->authors}}</h5>
					Publication Link:<a href="{{$research->publication_link}}">
						{{$research->linkName}}</a>
				</td>
			</tr>
			@endforeach
			<!--
			<tr>
				<th>2</th>
				<td>
					<h5 class="display-5 ">Authors : Bidhan Biswas (6th Batch), Hossain Shahid Soroardi (6th Batch)</h5>
				 Publication Link:<a href="https://ieeexplore.ieee.org/document/8628107">
					 Brain Tumor Detection With Tumor Region Analysis Using Adaptive Thresholding And Morphological Operation</a>
				</td>
			</tr>
			<tr>
				<th>3</th>
				<td>
					<h5 class="display-5">Authors : Abu Ahammed Babu (6th batch), Anamul Hasan (6th batch)</h5>
					Publication Link:<a href="https://ieeexplore.ieee.org/document/8554538">
						Suggesting an Informative Order of Bangla Followup News on a Specific Issue from Several Days Newspapers</a>
				</td>
			</tr>
			<tr>
				<th>4</th>
				<td>
					<h5 class="display-5">Authors : Md. Rezwanul Islam (6th batch), Md Reezbhan Imteaz (6th batch)</h5>
					Publication Link:<a href="https://ieeexplore.ieee.org/document/8465663">
						Detection and analysis of brain tumor from MRI by Integrated Thresholding and Morphological Process with Histogram based method</a>
				</td>
			</tr>
			<tr>
				<th>5</th>
				<td>
					<h5 class="display-5">Authors : Mohsina Binte Asad, Fatema Jannat Sharna</h5>
					Publication Link:<a href="https://ieeexplore.ieee.org/document/7856527">
						HSV and Template Matching based Bengali road sign recognition technique</a>
				</td>
			</tr>



			<tr>
				<th>6</th>
				<td>
					<h5 class="display-5">Authors : , </h5>
					Publication Link:<a href="">

					</a>
				</td>
			</tr>

	-->

		</tbody>
	</table>
	<div class="pt-2">

	</div>
	</div>
	</div>

	<div class="pt-4">

	</div>

	@endsection
