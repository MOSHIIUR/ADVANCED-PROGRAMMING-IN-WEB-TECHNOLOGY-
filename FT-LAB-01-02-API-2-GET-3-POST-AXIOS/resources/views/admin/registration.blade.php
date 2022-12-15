@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Home
@endsection

@section ('content')


<div id="register"></div>
<script src="{{ asset('/js/app.js') }}"></script>

<!-- ---------------------------------------------------------------   javscript-------------------------- -->
<!-- <script>
	$(document).ready(function(){
		$('#submit').on('click', function(event){
			event.preventDefault();
			alert("hsdfhdshgsd");
			/* -------------------------------------------------------------- */
			axios.post('api/register', {
				id: $('#id').val(),
				name: $('#name').val(),
				mail: $('#mail').val(),
				//image: $('#image').val(),
				pass: $('#pass').val(),
			})
			//if success then the .then is working
			.then(function (response) {
				console.log(response);
			})

			//if wrror is occured .catch this
			.catch(function (error) {
				console.log(error);
			});
			/* -------------------------------//------------------------------ */
		});
	});
</script> -->


@endsection
