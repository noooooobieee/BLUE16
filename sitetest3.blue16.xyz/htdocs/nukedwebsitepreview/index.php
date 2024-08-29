<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blue16</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-color: black;
        }

        #loading-screen {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff; /* Changed to white */
            font-family: 'Code', monospace;
            font-size: 24px;
            text-shadow: 0 0 10px #fff; /* Changed to white */
            display: flex;
            flex-direction: column;
            align-items: center;
            visibility: visible;
            transition: visibility 0s linear 3s;
        }

        #loading-screen.hide {
            visibility: hidden;
        }

        #background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(10px);
            transition: filter 3s ease;
        }

        #enter-text {
            cursor: pointer;
            margin-top: 20px;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            color: #fff; /* Changed to white */
        }

        .frame {
            position: fixed;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            border: 2px solid #fff; /* Changed to white */
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            color: #fff; /* Changed to white */
            padding: 20px;
            overflow: auto;
        }

        #note {
            top: 20px;
            left: 20px;
            width: calc(50% - 40px);
            height: 60%;
        }

        #links {
            bottom: 20px;
            left: 20px;
            width: calc(50% - 40px);
            height: 30%;
        }

        #right-text {
            top: 0;
            right: 0;
            bottom: 0;
            position: fixed;
            width: 45%;
            text-align: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            color: #fff; /* Changed to white */
            font-family: 'Code', monospace;
            font-size: 10px;
            text-shadow: 0 0 5px #fff; /* Changed to white */
            white-space: pre-line;
            margin-right: 20px; /* Adjusted margin to the left */
        }
    </style>
</head>

<body onclick="enterSite()">
    <audio id="audio" preload="auto" src="https://blue16.xyz/coolpage/media/loaded.mp3"></audio>
    <audio id="music" preload="auto" loop src="https://blue16.xyz/coolpage/media/music.mp3"></audio>

    <div id="loading-screen">
        jst wait!!! (click to skip loading)
        <div id="enter-text">Click anywhere to enter :3</div>
    </div>

    <img id="background-image" src="https://i.ibb.co/99Z3kCj/image.png" alt="Background Image">

    <div id="note" class="frame">
        how u hitted up there bud?
    </div>

    <div id="links" class="frame">
        <!-- Your links go here -->
        <a href="https://www.blue16.xyz" style="color: #fff;">BLUE16</a><br>
        <a href="https://dsc.gg/blue16" style="color: #fff;">BLUE16 Discord</a><br>
        <a href="#" style="color: #fff;">WEBSITE File (?)</a>
    </div>

    <div id="right-text" class="frame">
        <pre>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                  ++++++++++++++++                                  
                                            ++++++==-:.........:-=++++                              
                                       ++++++=:..                  .-+++                            
                                  +++++=-..                          .:++                           
                             +++++=:..                                 .=++                         
                       ++++++-....                                      .-++                        
                 ++++++=:...                                             .=+                        
            +++++=-:...                                                  ..++                       
       +++++=:...                                                         .-++                      
       ++:..                                                               .++                      
       *++.                             ...--===-.                         .++                      
        *+=.                            .-+++***++-.                       :++                       
         ++:.                            .=+    **+:.                     .=+                       
         *++.                             :++    *++.                    .-++                       
          *+-.                            .=++  **+=.                   .-++                        
          *++:.                            .=+ **+=.                   .-++++++                     
           *++.                            .:+++=..                       ....=+++                  
            *+-.                            ....                              ..:+++                
             *++.                                                                 .-++               
              *+=.                                                                 .-++              
               *+:                                                                  .=+              
               *++.                             ..:-=+++-..                          :++             
                *+=.                            .=++   **+=.                         .++             
                 ++:.                           .:++    **+=.                        .++             
                 *++..                           .-++    **+:.                       :++             
                  *+=.                            .++    **+:.                      .-+              
                   ++:.                           .:++ ***+-.                      .:++              
                   *++.                            .-+*++=..                       .++               
                    *+=.                            .+=:..                       .-++                
                     *+-.                            .                          .=++                
                     *++.                                                    ..=++                  
                      *+=.                                                ..-+++                    
                       *+-.                                           ..:=++++                       
                        ++.                                      ...:=+++++                          
                        *+=.                                 ...-+++++                              
                         *+-.                            ...-++++                                   
                         *++.                         ..=++++                                       
                          *++.                    .:+++++                                           
                           ++-.              ..-=++++                                               
                           *++:.        ..:=+++++                                                   
                            *+=.    ..:=+++++                                                       
                             *+-..-=++++                                                            
                              ++++++                                                                
                                                                                                    

        </pre>
    </div>

    <script>
        window.onload = function () {
            setTimeout(function () {
                document.getElementById('loading-screen').classList.add('hide');
                document.getElementById('background-image').style.filter = 'blur(0)';
                document.getElementById('enter-text').style.opacity = 1;
                document.getElementById('audio').play();
                document.getElementById('music').play();
            }, 3000);
        }

        function enterSite() {
            document.getElementById('enter-text').style.marginTop = '10px';
            document.getElementById('note').style.opacity = 1;
            document.getElementById('links').style.opacity = 1;
            document.getElementById('right-text').style.opacity = 1;
            document.getElementById('loading-screen').style.visibility = 'hidden';
        }
    </script>
</body>

</html>
