--TEST--
Enable with environment variable
--ENV--
MEMPROF_PROFILE=1
--FILE--
<?php
var_dump(memprof_enabled());
var_dump(memprof_enabled_flags());
memprof_dump_array();
--EXPECT--
bool(true)
array(2) {
  ["enabled"]=>
  bool(true)
  ["native"]=>
  bool(false)
}
