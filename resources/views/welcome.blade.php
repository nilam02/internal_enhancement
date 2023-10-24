<!-- <form action="/runcode" method="POST">
    @csrf
    <textarea name="code" rows="10" cols="50"></textarea>
    <button type="submit">Run Code</button>
</form> -->

<!DOCTYPE html>
<html>
<head>
    <!-- Include Ace Editor from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js" integrity="sha512-Wxna1etjH/Gz4QNE4mEz0D04u5JzBKLmYwS7Md5dW0U6WkzTMQ63hXavvJWtPWEM6U9rIw+IhRJF0ZJ2LBsA5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <form action="/runcode" method="POST">
        @csrf
        <!-- Use a specific ID for the textarea -->
        <div id="editor"></div>
        <textarea name="code" id="code" rows="10" cols="50"></textarea>
        <button type="submit">Run Code</button>
    </form>

    <script>
        var editor = ace.edit("editor");
        var codeTextArea = document.getElementById("code");

        // Set editor options
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/python");

        // Update the hidden textarea with the editor content
        editor.getSession().on("change", function () {
            codeTextArea.value = editor.getValue();
        });
    </script>
</body>
</html>

