$(document).ready(function(){
	$('.btn-sup').click(function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var region = $('#region').val();
		var phone = $('#phone').val();
		var home = $('#home').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var cpassword = $('#cpassword').val();
		var gender = $('#gender').val();
		
		var formData = '&fname='+fname+'&lname='+lname+'&region='+region+'&phone='+phone+'&home='+home+'&email='+email+'&password='+password+'&cpassword='+cpassword+'&gender='+gender;
		$.ajax({
			type:"POST",
			dataType:"html",
			data:formData,
			url:"template/add_worker1_script1.php",
			success:function (data, status, xhr) {
				$('.error').slideDown();
				$('.error').html(xhr.responseText);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 12000);
				if(xhr.responseText != "user already exist")
				{
					$('#fname').val("");
					$('#lname').val("");
					$('#region').val("");
					$('#phone').val("");
					$('#home').val("");
					$('#email').val("");
					$('#password').val("");
					$('#cpassword').val("");
					$('#gender').val("");
				}
			}
		})
		return false;
	});

	$('.btn-work').click(function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var region = $('#region').val();
		var branch = $('#branch').val();
		var phone = $('#phone').val();
		var home = $('#home').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var cpassword = $('#cpassword').val();
		var gender = $('#gender').val();

		var formData = '&fname='+fname+'&lname='+lname+'&region='+region+'&branch='+branch+'&phone='+phone+'&home='+home+'&email='+email+'&password='+password+'&cpassword='+cpassword+'&gender='+gender;
		$.ajax({
			type:"POST",
			dataType:"html",
			data:formData,
			url:"template/add_worker2_script.php",
			success:function (data, status, xhr) {
				$('.error').slideDown();
				$('.error').html(xhr.responseText);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 12000);
				if(xhr.responseText != "worker already exist")
				{
					$('#fname').val("");
					$('#lname').val("");
					$('#region').val("");
					$('#branch').val("");
					$('#phone').val("");
					$('#home').val("");
					$('#email').val("");
					$('#password').val("");
					$('#cpassword').val("");
					$('#gender').val("");
				}
			}
		})
		return false;
	});
});	
	