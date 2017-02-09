<html>
<head>
  <title>Simple form handler</title>
</head>

<body bgcolor="#EEEEEE">
  <center><h2>Simple Form Handler</h2></center>
  <p>
    The following table lists all parameter names and their values that were submitted from your form.
  </p>

  <table cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavender">
    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><string>Value</string></td>
    </tr>
    <tr>
      <td width="20%">question</td>
      <td><?php if (isset($_POST["question"])) {
          echo $_POST["question"]; 
      } ?></td> 
    </tr>
    <tr>
      <td width="20%">question2</td> 
      <td><?php if (isset($_POST["question2"])) {
          echo $_POST["question2"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">question3</td>
      <td><?php if (isset($_POST["question3"])) {
          echo $_POST["question3"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Answer A</td>
      <td><?php if (isset($_POST["A"])) {
          echo $_POST["A"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Answer B</td>
      <td><?php if (isset($_POST["B"])) {
          echo $_POST["B"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Answer C</td>
      <td><?php if (isset($_POST["C"])) {
          echo $_POST["C"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Answer D</td>
      <td><?php if (isset($_POST["D"])) {
          echo $_POST["D"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice Answer</td>
      <td><?php if (isset($_POST["Answer"])) {
          echo $_POST["Answer"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">True/False Answer</td>
      <td><?php if (isset($_POST["Answer2"])) {
          echo $_POST["Answer2"]; 
      } ?></td>      
    </tr>
    <tr>
      <td width="20%">Short Answer Response</td>
      <td><?php if (isset($_POST["response"])) {
          echo $_POST["response"]; 
      } ?></td>      
    </tr>  
  </table>

</body>
</html> 