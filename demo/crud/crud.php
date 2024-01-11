<?php
     if($_SERVER['REQUEST_METHOD'] == 'GET') {
          echo '{"name":"John", "age":31, "city":"New York"}';
          // access database and return all records
     }
     else if($_SERVER['REQUEST_METHOD'] == 'POST') {
          echo '{"operation":"POST", "result":"success"}';
          // access database and add new record
     }
     else if($_SERVER['REQUEST_METHOD'] == 'PUT') {
          echo '{"operation":"PUT", "result":"success"}';
          // access database and update record
     }
     else if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
          echo '{"operation":"DELETE", "result":"success"}';
          // access database and delete record
     }
?>