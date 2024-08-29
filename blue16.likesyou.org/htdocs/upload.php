<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form inputs
            $visibility = $_POST["visibility"];
            $encryption = isset($_POST["encryption"]) ? true : false;
            $description = isset($_POST["description"]) ? $_POST["description"] : "";
            $tags = isset($_POST["tags"]) ? $_POST["tags"] : "";
            
            // File upload directory
            $targetDir = "uploads/";

            // Create directory if not exists
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Check if file is selected
            if (!empty($_FILES["file"]["name"])) {
                // Check if file already exists
                if (file_exists($targetFilePath)) {
                    echo "<p style='color: red;'>File already exists.</p>";
                } else {
                    // Upload file
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                        echo "<p style='color: green;'>The file " . $fileName . " has been uploaded successfully.</p>";
                    } else {
                        echo "<p style='color: red;'>Sorry, there was an error uploading your file.</p>";
                    }

                    // Optionally encrypt the file
                    if ($encryption) {
                        $encryptedFilePath = $targetDir . "encrypted_" . $fileName;
                        // Call function to encrypt file
                        // Replace this with your encryption logic
                        encryptFile($targetFilePath, $encryptedFilePath);
                        // Remove original unencrypted file
                        unlink($targetFilePath);
                        // Update file name to encrypted version
                        $fileName = "encrypted_" . $fileName;
                    }

                    // Save file settings
                    $settingsFile = $targetDir . "settings.json";
                    $settings = [];

                    if (file_exists($settingsFile)) {
                        $settings = json_decode(file_get_contents($settingsFile), true);
                    }

                    // Add new entry to settings array
                    $settings[] = [
                        "file" => $fileName,
                        "visibility" => $visibility,
                        "description" => $description,
                        "tags" => $tags,
                        "upload_date" => date("Y-m-d H:i:s") // Current date and time
                    ];

                    // Write settings back to JSON file
                    file_put_contents($settingsFile, json_encode($settings, JSON_PRETTY_PRINT));
                }
            } else {
                echo "<p>Please select a file to upload.</p>";
            }
        }

        function encryptFile($source, $destination, $key) {
            $iv_length = openssl_cipher_iv_length('aes-256-cbc');
            $iv = openssl_random_pseudo_bytes($iv_length);
            $encrypted = openssl_encrypt(file_get_contents($source), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
            $encrypted = $iv . $encrypted;

            file_put_contents($destination, $encrypted);
        }

        function decryptFile($source, $destination, $key) {
            $iv_length = openssl_cipher_iv_length('aes-256-cbc');
            $iv = substr($source, 0, $iv_length);
            $data = substr($source, $iv_length);
            $decrypted = openssl_decrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

            file_put_contents($destination, $decrypted);
        }
        ?>
    </div>
</body>
</html>
