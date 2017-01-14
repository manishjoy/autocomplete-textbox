<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Autocomplete Textbox using PHP, MySQL and AJAX | TheCodingTutor</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(document).ready(function() {
    $( "#codingSkills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
  <style type="text/css">
    body{
      text-align: center;
      background: rgba(0, 88, 102, 0.86);
      font-family: sans-serif;
    }
    .link{
      margin: 50px 10px;
    }
  </style>
</head>
<body>
 
<h2>Autocomplete Textbox using PHP, MySQL and AJAX | TheCodingTutor</h2>
<div class="ui-widget">
  <label for="codingSkills">Coding Skill: </label>
  <input id="codingSkills"><br>
</div>
<div class="link">
  <span>Learn more at: </span><a href="http://thecodingtutor.com/">TheCodingTutor</a>
</div>
</body>
</html>