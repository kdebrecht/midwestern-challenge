<html>

<style>

    input[type=text]{ margin-bottom: 4px; width:100%; }

</style>

<form action="{{ route('contact.post') }}" style="width:500px" method="post">
@csrf

<input type="text" name="firstName" value="" placeholder="First Name" /><br  />
<input type="text" name="lastName" value="" placeholder="Last Name" /><br  />
<input type="text" name="title" value="" placeholder="title" /><br  />
<input type="text" name="email" value="" placeholder="Email" /><br  />

<textarea name="message" width="100" height="100"></textarea>

<button>Save</button>

</form>



</html>
