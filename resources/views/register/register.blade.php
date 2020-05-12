<!DOCTYPE html>
<html lang="en">

<head>
	<title>MyAtromG8</title>
	<meta charset = "UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><!--Fontawesome CDN-->
    <!-----SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    
</head>

<body>
	
	<div class="main">
		<div class="d-flex justify-content-start">
			<div class="detail-name d-flex justify-content-center">
				<h3 class="py-4">welcome @ user</h3>
			</div>
		</div>
		 <form id="reg_form">
		<div class="container my-4">
		    
			<div class="row d-flex justify-content-center">
				<div class="col-md-4  detail-rec1 py-4 my-auto mx-auto">
					<div class="row">
						<div class="container px-5">
							<div class="col-md-12 d-flex justify-content-center pt-3">
								<img src="{{asset('uploads/placeholder.png')}}" id="profile_pic"class="profile_img img-fluid rounded-circle" alt="user">
							</div>	
							<div class="col mt-n4 ml-n2 d-flex justify-content-end pb-4">
								<span class="profile_img1 img-fluid rounded-circle px-1 border border-secondary"><i class="fas fa-pencil-alt"></i></span>
								   <input type="file" id="input_pic" required style="opacity: 0.0; position: absolute; top:0; left: 0; bottom: 0;cursor:pointer; right:0; width: 100%; height:100%;" />
							</div>
						</div>
											
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-md-10">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-at"></i></span>
								</div>
								<input type="text"  class="form-control" placeholder="username" name="username" required/>						
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="2" id="about" placeholder="About me" name="about_me" required></textarea>
							</div>

						</div>						
					</div>					
				</div>
				<div class="col-md-8 detail-rec2 pt-5 px-5 mx-auto my-4">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" onfocus="(this.type='date')" class="form-control" placeholder="Date of Birth" name="dob" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" name="gender" class="form-control" placeholder="Gender" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="blood_group" placeholder="Blood Group" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="nationality" placeholder="Nationality" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="occupation" placeholder="Occupation" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-6">
							<div class="form-group">									
								<input type="text" class="form-control" name="address_line_one" placeholder="Address line 1" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">									
								<input type="text" class="form-control" name="adress_line_two" placeholder="Address line 2" required>
							</div>
						</div>					
					</div>
					<div class="row mt-3">
						<div class="col-md-3">
							<div class="form-group">									
								<input type="text" class="form-control" name="country"placeholder="Country" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">									
								<input type="text" class="form-control" name="state" placeholder="State" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">									
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">									
								<input type="text" class="form-control" name="zip" placeholder="Zip Code" required>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="college" placeholder="College">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control" name="course" placeholder="Courses" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">									
								<input type="text" class="form-control"  name="interest"placeholder="Interested In" required>
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center form-group">
						<button type="submit" class="btn login_btn">
							<i class="fas fa-user-plus pr-2"></i>submit
						</button> 
					</div>
				</div>
				
			</div>
		</div>
		</form>
	</div>
<script>
    $(document).ready(function(){
      function processImage(input) 
            {
                if (input.files && input.files[0]) 
                {
                    var reader = new FileReader();

                    reader.onload = function (e) 
                    {
                      
                        $('#profile_pic')
                        .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#input_pic").change(function(){
                processImage(this);
                });
       $("#reg_form").submit(function(e) {
          e.preventDefault();
        var frm = $('#reg_form');
        var formData = new FormData(frm[0]);
        formData.append('file', $('input[type=file]')[0].files[0]);
        $.ajax({
            type: 'post',
            url: "/api/user",
            data: formData,
            processData: false,
            contentType: false,
            
            success: function(result){
                if(result[0]=='success')
                {
                    
                    swal({
                         title: "Good job!",
                         text: "Form submitted sucessfully",
                         icon: "success",
                    })
                    .then((value) => {
                      window.location.reload();
                    });
                }
            }
            
        });
        })       
    });      
</script>
</body>
</html>