
			$(document).ready(function () {
				$("#registration_form").validate({
					rules: 
					{
						first_name: {
							required: true,
						},
						last_name: {
							required: true,
						},
						last_name: {
							required: true,
						},
						email: {
							required: true,
						},
						password: {
							required: true,
						},
						mobile_number: {
							required: true,
						},
						image: {
							required: true,
						},
						gender: {
							required: true,
						},
						dob: {
							required: true,
						},
						address: {
							required: true,
						},
					},
					messages:{
						first_name: {
						required: "FIRST NAME IS REQUIRED"
						},
						last_name: {
						required: "Last NAME IS REQUIRED"
						},
						email: {
						required: "EMAIL IS REQUIRED"
						},
						password: {
						required: "PASSWORD IS REQUIRED"
						},
						mobile_number: {
						required: "MOBILE NUMBER REQUIRED"
						},
						image: {
						required: "IMAGE IS REQUIRED"
						},
						gender: {
						required: "GENDER IS REQUIRED"
						},
						dob: {
						required: "DOB IS REQUIRED"
						},
						address: {
						required: "ADDRESS IS REQUIRED"
						},
					}
				});

			});
		