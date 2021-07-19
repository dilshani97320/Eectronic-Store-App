//let id = $("input[name*='product_id']")
//id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    let id = $("input[name*='product_id']")
    let product_code = $("input[name*='product_code']");
    let product_name = $("input[name*='product_name']");
    let seller = $("input[name*='seller']");
    let product_price = $("input[name*='product_price']");
    let product_qnt = $("input[name*='product_qnt']");

    id.val(textvalues[0]);
    product_code.val(textvalues[1]);
    product_name.val(textvalues[2]);
    seller.val(textvalues[3]);
    product_price.val(textvalues[4]);
    product_qnt.val(textvalues[5].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}

function validationPassword(){
	var form= document.getElementById("formPassword");
	var password= document.getElementById("password").value;
	var text= document.getElementById("pass");
	var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

	if(password.match(pattern)){
		form.classList.add("valid");
		form.classList.remove("invalid");
		text.innerHTML ="Password Valid";
		text.style.color= "#00ff00";

	}
	else{
		form.classList.remove("valid");
		form.classList.add("invalid");
		text.innerHTML ="Password Invalid";
		text.style.color= "#ff0000";
	}

	if(password == ""){
		form.classList.remove("valid");
		form.classList.remove("invalid");
		text.innerHTML ="";
		text.style.color= "#00ff00";
	}



}