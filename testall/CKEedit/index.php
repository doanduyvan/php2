<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor Form Example</title>
</head>

<body>
    <h1>Submit Form with CKEditor</h1>
    <form action="php.php" method="POST">
        <textarea name="content" id="editor1"></textarea>
        <button type="submit">Submit</button>
    </form>




    <script src="./node_modules/ckeditor4/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>