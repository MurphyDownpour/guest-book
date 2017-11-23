function addRecord(){
	var addButton = document.querySelector("#addrecord");
	addButton.disabled = true;
	var form = document.createElement("form");
	form.setAttribute("method", "POST");
	form.setAttribute("id", "form");
	var label = document.createElement("p");
	label.innerText = "Имя:";
	label.setAttribute("style", "text-align: center;");
	var input = document.createElement("input");
	input.setAttribute("type", "text");
	input.setAttribute("class", "center-block");
	input.setAttribute("name", "name");
	var label1 = document.createElement("p");
	label1.innerText = "Сообщение:";
	label1.setAttribute("style", "text-align: center;");
	var textbox = document.createElement("textarea");
	textbox.setAttribute('class', 'textbox center-block');
	textbox.setAttribute('name', 'message');
	var submit = document.createElement("input");
	submit.setAttribute('type', 'submit');
	submit.setAttribute('class', 'center-button btn btn-success send');
	var records = document.querySelector("#records");
	records.appendChild(form);
	form.appendChild(label);
	form.appendChild(input);
	form.appendChild(label1);
	form.appendChild(textbox);
	form.appendChild(submit);
}

$(".send").click(function () {
    var addButton = document.querySelector("#addrecord");
    if(addButton.click())
    {
        alert('Через 10 секунд...');
    }
    setInterval(activateNewRecord, 10000);
});

function send(){

}

function activateNewRecord()
{
    var addButton = document.querySelector("#addrecord");
    addButton.disabled = false;
}