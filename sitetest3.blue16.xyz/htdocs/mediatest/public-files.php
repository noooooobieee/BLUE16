<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Files</title>
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            margin: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        li strong {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }
        li a {
            color: #007bff;
            text-decoration: none;
        }
        li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Public Files</h1>
    <ul>
        <?php
        // Directory containing uploaded files
        $targetDir = "uploads/";

        // Read and decode settings from JSON file
        $settingsFile = $targetDir . "settings.json";
        if (file_exists($settingsFile)) {
            $settings = json_decode(file_get_contents($settingsFile), true);

            // Iterate through each entry in settings
            foreach ($settings as $entry) {
                // Check if the file is marked as public
                if ($entry['visibility'] === "public") {
                    // Display the file as a list item with additional settings
                    echo "<li>";
                    echo "<strong>{$entry['file']}</strong><br>";
                    echo "Description: {$entry['description']}<br>";
                    echo "Tags: {$entry['tags']}<br>";
                    echo "<a href='{$targetDir}{$entry['file']}'>View</a>";
                    echo "</li>";
                }
            }
        } else {
            echo "No public files available.";
        }
        ?>
    </ul>
</body>
</html>
