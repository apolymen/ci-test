<?php

defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($people as $row) {
    //echo $row->FirstName . " " . $row->LastName . " " . date_format(date_create($row->BirthDate), "Y/m/d") . "<br />";
    echo $row->contactFirstName . " " . $row->contactLastName . " " . $row->country . "<br />";
}
echo "<br>Page rendered in <strong>{elapsed_time}</strong> seconds. CodeIgniter Version <strong>" . CI_VERSION . "</strong>";
