function login()
{
	var un = $('#un').val();
	var ps = $('#ps').val();
	  //alert(un + ps);
	data ={'username':un,'password':ps};
	$.post('index.php/home/login',data, function(fb){
		if(fb.match('1'))
		{
			window.location.href ='index.php/home/deshboard';
		}
		else
		{
			alert('wrong User');
		}
	});

}