@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Add Table
@endsection

@section ('content')

<html>
<div class="container">
<meta name="csrf-token" content="{{ csrf_token() }}">
<body>
	<!-- @if(session()->has('message'))
	<h2 class="smsg" id="emsg_login">{{ session()->get('message') }}</h2>
	@endif -->
	<h2 class="smsg" id="emsg_login"></h2>

		<form onsubmit="return false">
		{{csrf_field()}}
		<table class="profile">

			<tr>
				<td>
				<div class="heading"><h1>Database Table Addition</h1></div>
				</td>
			</tr>

		
			<tr>
				<td>
					<input type="text" id='attribute_name' placeholder="Name your Attribute" value="{{old('attribute_name')}}">
					@if($errors->has('attribute_name'))
					<p class="emsg" id="emsg">{{$errors->first('attribute_name')}}</p>
					@endif
				</td>

				<td>
					<select id="attribute_type" value="{{old('attribute_type')}}">
						<option value>Choose a type</option>
						<option value="integer">Integer</option>
						<option value="string">String</option>
					</select>
					@if($errors->has('attribute_type'))
					<p class="emsg" id="emsg">{{$errors->first('attribute_type')}}</p>
					@endif    
				</td>

				<td id="text-align-left"><input type="submit" name="add_attribute" id="add_attribute" value="Add Attribute"></td>

			</tr>
		</table>

		<table class="profile">

			<tr>
				@foreach($attributes as $attribute)
				
					<td colspan="1"><input type="checkbox" id="attribute_list[]" value="{{$attribute -> name}}">{{$attribute -> name}}</td>
				
				@endforeach
				@if($errors->has('attribute_list'))
				<p class="emsg" id="emsg">{{$errors->first('attribute_list')}}</p>
				@endif
			</tr>

		
		</table>
	
		<table class="profile">

		<tr>
			<td>
				<input type="text" name="name" placeholder="Name your table" value="{{old('name')}}">
				@if($errors->has('name'))
				<p class="emsg" id="emsg">{{$errors->first('name')}}</p>
				@endif
			</td>
		</tr>
			<tr>
				<td id="text-align-left"><input type="submit" name="add_table" value="Add Table"></td>
			</tr>
		</table>
	
	</div>

</form>
	</body>

	
</html>

<!-- ============================================================== jquery - ajax ====================-->

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
        $(document).ready(function(){
//----------------- where the id is image if that state is changed then this js code invoked
//------------------instead of change ya'll can use 'onclick', 'onsubmit', or other events
            $('#add_attribute').on('click', function(event){
		               event.preventDefault(); //prevent from loading the page

//---------------------- form data loading
               var formData = new FormData();
               formData.append("name", $("#attribute_name").val());
               formData.append("type", $("#attribute_type").val());
               formData.append("form", 'attribute');
			   //console.log($("#attribute_name").val());
			   /* var formData = {
								name: $("#attribute_name").val(),
								type: $("#attribute_type").val(),
								form: 'attributes',
								}; */
				//var json = JSON.stringify(formData);
			   //console.log(formData.name);
//----------------------------------------------add token to the ajax
               $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
//--------------------------------------------jquery code

              $.ajax({
                url:"/add_table", //route
                type:'POST', //method
                data: formData, //data
								
								//next three line as it is
                contentType: false,
                cache: false,
                processData: false,
               
//-------------------------------getting the return data
               success:function(data) {
				if($.isEmptyObject(data.error)){
					//alert(data.success);
					//$("#attribute_list[]").html(data.attributes);
					console.log(data.attributes);
					
					let attribute = "";
					const attributes = data.attributes;
					attributes.forEach(myFunction);

					document.getElementById("attribute_list[]").innerHTML = attribute;
					//$("#attribute_list[]").html(attribute);
					
					function myFunction(item, index) {
					attribute += Object.values(attributes);
					}

					}
					
					
					else{
						alert(data.error);
					}
                  //$("#emsg_login").html(data.name);
                //console.log(data.name);
										}
								});
						});
				});
</script>



@endsection
