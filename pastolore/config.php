<?php

  c::set("google_analytics", false); // "UA-7082989-19");

  c::set("adminbar_position", "top");

  c::set("mail.ourself", array("Pastolore", "+43 676 4721227") );
  c::set("mail.to", array("flo.braeuer@gmail.com", "Bestellsystem") );
  c::set("mail.to2", array("flo@webarchitects.at", "Betreuer") );
  c::set("mail.from", array("pastolore@webarchitects.at", "Pastolore Mesh") );

  c::set("mail.host", "smtp.gmail.com");
  c::set("mail.user", "service@webarchitects.at");
  c::set("mail.pwd", "ganzgeheim");
  c::set("mail.auth", true);
  c::set("mail.secure", "tls");
  c::set("mail.debug", 1); // (1 = errors and messages, 2 = errors only)

?>
