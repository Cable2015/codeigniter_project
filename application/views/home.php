<!DOCTYPE html>
<html ng-app>
  <head>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script src='bower_components/angular/angular.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style >
      .form-group
      {
        width: 500px;
        margin-left: auto;
        margin-right: auto;
      }
    .navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    .navbar li {
        float: left;
    }

    .navbar li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    .navbar li a:hover {
        background-color: #111;
    }
    .navbar ul {
    position: fixed;
    top: 0;
    width: 100%;
    }
    .navbar li {
    border-right: 1px solid #bbb;
    }

    .navbar li:last-child {
        border-right: none;
    }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="navbar">
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">Team</a></li>
  <li><a href="contact.asp">Press</a></li>
  <li><a href="about.asp">About</a></li>
  <li style="float:right"><a class="active" href="#account">Account</a></li>
</ul>
</div>
      <div class="form-group"body ng-init=" dojo='NAME' ">
        <h1><center><img src="<?php echo base_url('assets/images/nfl.png'); ?>" width="75" heigth="150" /></center></h1>
        <form class="" action="create" method="post">
          <div class="form-group">
            <input type="text" name="team" placeholder="Team" class="form-control">
            <br>
            <input type="text" name="city" placeholder="City" class="form-control">
            <br>
            <input type="text" name="conference" placeholder="Conference" class="form-control">
            <br>
            <input type="text" name="division" placeholder="Division" class="form-control">
            <br>
            <input type="text" name="website" placeholder="Website" class="form-control">
            <br>
            <input type="submit" name="insert" value="Insert Team" class="btn btn-info">
          </div>
          <!-- <input type="text" name="name" placeholder="NAME" class="form-control">
          <br>
          <input type="submit" name="" class="btn btn-primary" value="Submit"> -->
        </form>
        <hr>


            <legend><center>Data</center></legend>
            <table class="table table-striped">
  <thead>
    <tr>
      <th></th>
      <th>Team</th>
      <th>City</th>
      <th>Conference</th>
      <th>Division</th>
      <th>Website</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($records as $row) : ?>
    <tr>
      <th></th>
      <td><?php echo $row->team; ?></td>
      <td><?php echo $row->city; ?></td>
      <td><?php echo $row->conference; ?></td>
      <td><?php echo $row->division; ?></td>
      <td><?php echo $row->website; ?></td>
      <?php endforeach ?>
    </tr>
  </tbody>
</table>
      </div>
  </body>
</html>
