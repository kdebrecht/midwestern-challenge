
<html>
    <form action="{{ route('content.post') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="title" maxlength="50"/><br />
        <textarea name="content" placeholder="content" >


        </textarea>

        <input type="submit" value="Submit" />

    </form>
</html>
