<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>{{title}}</title>
    
</head>
<body>
<!-- must learn about Routes - https://router.vuejs.org/-->

<h1>Song Library</h1>
<div id="selector-app">
                <ul class= "inputField">
                    <li><a href="">Suggest a song</a></li>
                    <li>
                        <label> 
                        <input></input>
                        </label>Enter Song Selection
                        </li>
                        <!--dropdown menu-->
                        <!--Is is recommended to provide a disabled option with an empty value..https://vuejs.org/v2/guide/forms.html?-->
                                <li>
                                    <span>Filtering Options: </span>
                                    <select v-model="selected">
                                        <!-- Dynamica options to show what is selected next to dropdown -->
                                        <option disabled value="" v-for="option in options" v-bind:value="option.value">Filtering Options:</option>
                                        {{option.text}}
                                        <option>Artist</option>
                                        <option>Genre</option>
                                        <option>Time Period</option>
                                    </select>
                                   
                                </li>
                    <li><a href="index.php">Home</a></li>
                </ul>
</div>


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="app.js"></script>
</body>
</html>