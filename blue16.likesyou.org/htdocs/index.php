<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="file"],
        select,
        textarea,
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            margin-top: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Select File:</label>
        <input type="file" name="file" id="file" required><br><br>
        <label for="domain">Select Domain:</label>
        <select name="domain" id="domain">
            <option value="http://sitetest3.blue16.xyz/">sitetest3.blue16.xyz</option>
            <option value="http://blue16.likesyou.org/">blue16.likesyou.org</option>
        </select><br><br>
        <label for="visibility">Visibility:</label>
        <select name="visibility" id="visibility">
            <option value="public">Public</option>
            <option value="private">Private</option>
        </select><br><br>
        <label for="encryption">Encrypt File:</label>
        <input type="checkbox" name="encryption" id="encryption"><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" id="tags"><br><br>
        <input type="submit" value="Upload">
    </form>
    <p><a href="/public-files.php">View Public Files</a></p>

    <script>
        // Update form action based on selected domain
        document.getElementById('domain').addEventListener('change', function() {
            var selectedDomain = this.value;
            var uploadForm = document.querySelector('form');
            uploadForm.action = selectedDomain + 'upload.php';
        });
    </script>
</body>
</html>
