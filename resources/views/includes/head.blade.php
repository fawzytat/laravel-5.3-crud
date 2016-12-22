<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Crud laravel try </title>
  <script src="https://a...content-available-to-author-only...s.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
	  function getMessage(){
            $.ajax({
               type:'POST',
			   url:'SignIn/ajax',
			   data:{email:$('input[name="email"]').val(),password:$('input[name="password"]').val()},
			   dataType:'json',
               encode:true,
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
       }
	</script>
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>

</head>
<body>
