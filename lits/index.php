<!DOCTYPE html>
<html>
<head>
  <title>Lits Installer</title>
  <link rel="icon" type="image/x-icon" href="/images/lits-logo.png">
  <style>
    <?php include "common.css" ?>
  </style>
</head>
<body>
  <?php
    $os = shell_exec("grep -m 1 ID /etc/os-release");
    $arch = "ID=arch";
    $deb = "ID=debian";
    echo "$os $arch $deb <br />";
    if ($os==$deb) {
      echo "Arch";
    } else if ($os==$arch) {
      echo "Not ready for debian.";
    } else {
      echo "do i know you?";
    }
  ?>
</body>
</html>
