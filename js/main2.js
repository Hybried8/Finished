document.getElementById('loginButton').onclick = (e) => {
    let error = document.getElementById('loginError');
    let email =document.getElementById('loginEmail').value;
    let password =document.getElementById('loginPassword').value;
    error.innerHTML = '';
    if(email == "" || password == ""){
        error.innerHTML = "All input fields required";
        return;
    }else{

			var formData = new FormData();

			formData.append('email', email);
			formData.append('password', password);

			$.ajax({
				url: 'includes/_login.php',
				type: 'POST',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				success: function (response) {  
                    if (response == "true") {
                        window.location.href = 'dashboard/index.php';
                    } else {
                        error.innerHTML = response;
                    }
				},
                
			})

    }
    
    
}