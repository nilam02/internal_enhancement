<form action="/upload-problem" method="POST">
    @csrf
    <label for="statement">Problem Statement:</label><br>
    <textarea name="statement" rows="4" cols="50"></textarea><br><br>

    <label for="input">Input:</label><br>
    <textarea name="input" rows="4" cols="50"></textarea><br><br>

    <label for="output">Output:</label><br>
    <textarea name="output" rows="4" cols="50"></textarea><br><br>

    @for ($i = 1; $i <= 6; $i++)
        <label for="test_case{{$i}}">Test Case {{$i}}:</label><br>
        <textarea name="test_case{{$i}}" rows="4" cols="50"></textarea><br><br>
    @endfor

    <button type="submit">Upload</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
