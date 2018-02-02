{{"This is upload blade"}}

<form method="post" action="upload" enctype="multipart/form-data">
Name:<br/>
<input type="text" name="name"/><br/>
Image:<br/>
<input type="file" name="image"/><br/>
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<input type="submit" name="upload" value="upload"/>
</form>