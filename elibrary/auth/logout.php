<?php
session_start();

// Destroying session
session_destroy();
header('location:../');
