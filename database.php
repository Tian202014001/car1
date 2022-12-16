<?php
        $conn = oci_connect('dbms_project', 'mahi202014030', '//localhost/XE');
        // Check connection
        if (!$conn) {
            echo 'Failed to connect to oracle' . "<br>";
        }
        else {
            echo 'Connected successfully!' ."<br>";
        }