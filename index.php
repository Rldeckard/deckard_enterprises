<html>
  <head>
  <style>
  th {
    background-color: #19198c;
    color: white;
    padding: 10px;
    margin: 0px;
    width: 1%;
    text-align: center;
    }
  a {
    color: black;
    text-decoration: none;
    padding: 10px;
  }
  a:active {
    color: black;
  }
  td:hover {
    background-color: lightgray;
    cursor: pointer;
    box-shadow: 2px 2px 10px;
  }
  td:active {
    padding: 8px;
    background-color: gray;
    box-shadow: 1px 1px 20px;
    border-radius: 1px 1px 1px 1px;
  }
  td {
    padding: 10px;
  }
  </style>
  <?php include('header.php'); ?>
    <title>
      Deckard Enterprises
    </title>
  </head>
  <body style="margin:0"> <! Margin needs done here to eliminate white space>
    <div style="text-align:center;background-color:#19198c;;padding:15px">
      <span style="color:white">Welcome to Deckard Enterprises!</span>
    </div>
    <?php $projects = scandir('/var/www/html'); ?>
    <div style="margin:0 auto;width:60%;text-align:center;padding-top:5%">
      <table style="text-align:center">
        <tr>
          <th>Current Projects</th><th>Helpful Links</th><th>Future Projects</th>
        </tr>
        <td><a target="_external" href="ticket_tracker">935TH Ticket Tracker</a></td><td><a target="_external" href="https://github.com/Rldeckard/ticket_tracker">Ticket Tracker Files</a></td><td></td>
        </tr>
      </table>
    </div>
  </body>
</html>












