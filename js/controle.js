$(document).ready(function(){
	$('.error').hide();
	$('.view-sup-stat').click(function(){
		//$('.table-s').load("template/view_sup_stat.php");
		$.ajax
		({
			type: "POST",
			url: "template/view_sup_stat.php",
			success:function(data)
			{
				$('.col2').html(data);
			}
		})
	});
	$('.view-report').click(function(){
		//$('.table-s').load("template/view_sec_off_report.php");
		$.ajax
		({
			type: "POST",
			url: "template/view_sec_off_report.php",
			success:function(data)
			{
				$('.col2').html(data);
			}
		})
	});
	$('.add-worker1').click(function(){
		$('.col2').load("template/add_worker1.php");
	});
	$('.add-worker2').click(function(){
		$('.col2').load("template/add_worker2.php");
	});
	$('.add-branch').click(function(){
		$('.col2').load("template/add_branch.php");
	});
	$('.rem-com').click(function(){
		$('.col2').load("template/main.php");
	});
	$('.table1').click(function(){
		$('.col2').load("template/attendance.php");
	});
	$('.incident').click(function(){
		$('.col2').load("template/incident.php");
	});
	$('.login1').click(function(){
		$('.col2').load("php/login1.php");
	});
	$('.login2').click(function(){
		$('.col2').load("php/login2.php");
	});
	$('.login3').click(function(){
		$('.col2').load("php/login3.php");
	});
	$('.error').hide();

	$('.branch').change(function(){
		var branch = $('.branch').val();
		var formData = 'man='+branch;

		$.ajax({
			type:"POST",
			url:"template/table1.php",
			data:formData,
			success:function(data){
				if($('.table-main').html(data) != "")
					$('.table-main').html(data);
				else
					$('.table-main').html("");

			}
		})
		return false;
	});
	/*$('.login').click(function(){
		//alert('ok');
		var username = $('#username').val();
		var password = $('#password').val();
		var formData = '&username='+username+'&password='+password;
		$.ajax({
			type:"POST",
			url:"php/login_script1.php",
			data:formData,
			success:function(data, status, xhr){
				$('.error').slideDown();
				$('.error').html(data);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 9000);
			}
		})
		return false;
	});*/

	
	$('.pdf').click(function(){
		$('.col2').load('template/pdf1.php');
	});

	$('.remark').click(function(){
		var title = $('#title').val();
		var content = $('#content').val();
		var formData = '&title='+title+'&content='+content;

		$.ajax({
			type:"POST",
			url:"template/remark.php",
			data:formData,
			success:function(data, status, xhr){
				$('.error').slideDown();
				$('.error').html(data);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 9000);
				$('#title').val("");
				$('#content').val("");
			}
		})

		return false;
	});
	$('.incident1').click(function(){
		var title = $('#title').val();
		var content = $('#content').val();
		var formData = '&title='+title+'&content='+content;

		$.ajax({
			type:"POST",
			url:"template/remark.php",
			data:formData,
			success:function(data, status, xhr){
				$('.error').slideDown();
				$('.error').html(data);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 9000);
				$('#title').val("");
				$('#content').val("");
			}
		})

		return false;
	});

	$('.btn-branch').click(function(){
		var branch = $('#branch').val();
		var region = $('#region').val();
		var address = $('#address').val();
		var formData = '&branch='+branch+'&region='+region+'&address='+address;

		$.ajax({
			type:"POST",
			url:"template/add_branch_script.php",
			data:formData,
			success:function(data){
				$('.error').slideDown();
				$('.error').html(data);
				setInterval(function(){
					$('.error').fadeOut(3000);
				}, 9000);
				$('#branch').val("");
				$('#region').val("");
				$('#address').val("");
			}
		})
		return false;
	});

	$('#region').change(function(){
		var region = $('#region').val();
		var formData = 'region='+region;
		$.ajax({
			type: "POST",
			url: "template/query.php",
			data: formData,
			success:function(data){
				$('#here').html(data);
			}
		})
	});

	$('.region').change(function(){
		var region = $('.region').val();
		var formData = 'region='+region;
		$.ajax({
			type: "POST",
			url: "template/query.php",
			data: formData,
			success:function(data){
				$('.branch').html(data);
			}
		})
	});


	/*$('input[type="submit"]').click(function(evt){
		var val = $('input[type=submit][clicked=true]').value();
		alert(val);
		return false;
	});*/
});
