function margin_gallery() {
	var x = document.getElementById('gallery');
	if (x.style.marginTop === "30px") {
		x.style.marginTop = "0";
	} else {
		x.style.marginTop = "30px";
	}
}

function hide() {
	if (document.getElementById('xx3').style.display === 'block') {
		document.getElementById('xx3').style.display='none';
	} else {
		document.getElementById('xx3').style.display='block';
	}
}


function modalWindow() {
	document.getElementById('xx').style.opacity='1';
	document.getElementById('yy').style.background='url("/img/fon1px.png")';
}

function closemodalWindow() {
	document.getElementById('xx').style.opacity='0';
	document.getElementById('yy').style.background='none';
}

function t3() {
	alert('t3');
	document.getElementById('xxx').style.color='red';
}

function authWindow() {
	document.getElementById('auth').style.display='block';
}


function escapeHtml(text) {
	return text
		.replace(/&/g, "&amp;")
		.replace(/</g, "&lt;")
		.replace(/>/g, "&gt;")
		.replace(/"/g, "&quot;")
		.replace(/'/g, "&#039;");
}

function check() {
	var l1 = document.getElementById('key1').value.length;
	var l2 = document.getElementById('key2').value.length;

	if (l1 < 2) {
		document.getElementById('err1').innerHTML='логин должен быть не менее 2-х символов';
		return false;
	}
	if (l2 < 4) {
		document.getElementById('err2').innerHTML='пароль должен быть не менее 4-х символов';
		return false;
	}
}

function addComment() {

	document.getElementById('err3').innerHTML='';

	var name = $('#comment_name').val();
	var text = $('#comment_text').val();

	if (name.length < 1) {
		document.getElementById('err3').innerHTML='<b>Вы не ввели имя</b>';

	} else if (text.length < 1) {
		document.getElementById('err3').innerHTML='<b>Вы не ввели текст</b>';
	} else {
		$.ajax ({
			url:"/comments/ajax_comments?ajax=1",
			type:"POST",
			cache:false,
			timeout:15000,
			data:{name:name,text:text},
			success:function(msg) {
				var response = JSON.parse(msg);
				var div = document.createElement('div');
				div.innerHTML = '- <b>' + escapeHtml(response.name) + '</b> ' + escapeHtml(response.datetime_create) + '<br>' + escapeHtml(response.text) +'<br><br>';
				newcomment.appendChild(div);
				$('#comment_name').val('');
				$('#comment_text').val('');
			}
		});
	}
}

function chat() {
	$.ajax ({
		url:"/comments/ajax_chat?ajax=1",
		type:"POST",
		cache:false,
		timeout:15000,
		data:"req=ok",
		success:function(msg) {
			var response = JSON.parse(msg);
			response.forEach(function(item) {
				var div = document.createElement('div');
				div.innerHTML = '- <b>' + escapeHtml(item.name) + '</b> ' + escapeHtml(item.datetime_create) + '<br>' + escapeHtml(item.text) +'<br><br>';
				newcomment.appendChild(div);
			});
		}
	})
}

