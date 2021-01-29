<?php

require('../models/connection.php');
require('header.php');
require('../models/search_all_posts.php');
$resultes=search_all_post($bdd);
require('list_posts.php');
require('footer.php');