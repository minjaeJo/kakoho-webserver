<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2017-12-09 01:23:15 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:23:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:23:16 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:23:35 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:23:37 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:24:15 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:24:16 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:24:43 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:24:44 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:25:03 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:25:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:25:43 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:25:45 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:25:54 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:04 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:26:05 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:31 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:26:32 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:56 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:26:57 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:26:57 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:26:59 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:27:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:27:18 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:27:20 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:27:21 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:27:26 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:30:53 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:30:54 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:30:59 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:31:08 --> No URI present. Default controller set.
DEBUG - 2017-12-09 01:31:10 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:31:14 --> Google Maps Class Initialized
DEBUG - 2017-12-09 01:31:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:01:29 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:01:30 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:01:36 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:01:39 --> Severity: Notice --> Use of undefined constant console - assumed 'console' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:01:39 --> Severity: Warning --> log() expects parameter 1 to be float, array given C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:01:39 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:01:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:01:39 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 76
ERROR - 2017-12-09 02:01:39 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 77
ERROR - 2017-12-09 02:01:39 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
ERROR - 2017-12-09 02:01:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Exceptions.php:272) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Common.php 573
DEBUG - 2017-12-09 02:03:09 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:03:10 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:03:15 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:03:16 --> Severity: Notice --> Use of undefined constant console - assumed 'console' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:03:16 --> Severity: Warning --> log() expects parameter 1 to be float, array given C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:03:16 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:03:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:03:16 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 76
ERROR - 2017-12-09 02:03:16 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 77
ERROR - 2017-12-09 02:03:16 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
ERROR - 2017-12-09 02:03:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Exceptions.php:272) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Common.php 573
DEBUG - 2017-12-09 02:08:37 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:08:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:08:43 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:08:45 --> Severity: Notice --> Use of undefined constant console - assumed 'console' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:08:45 --> Severity: Warning --> log() expects parameter 1 to be float, array given C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 38
ERROR - 2017-12-09 02:08:45 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:08:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 55
ERROR - 2017-12-09 02:08:45 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 76
ERROR - 2017-12-09 02:08:45 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 77
ERROR - 2017-12-09 02:08:45 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
ERROR - 2017-12-09 02:08:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Exceptions.php:272) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\system\core\Common.php 573
DEBUG - 2017-12-09 02:10:20 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:10:21 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:10:29 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:10:30 --> Severity: Notice --> Use of undefined constant locationXY - assumed 'locationXY' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 39
ERROR - 2017-12-09 02:10:30 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:10:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:10:31 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:10:31 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:10:31 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
ERROR - 2017-12-09 02:11:13 --> Severity: Notice --> Use of undefined constant locationXY - assumed 'locationXY' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 39
ERROR - 2017-12-09 02:11:13 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:11:13 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:11:13 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:11:13 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:11:20 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:11:21 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:11:35 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:11:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:11:35 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:11:35 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:11:35 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:11:42 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:11:44 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:14:02 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:14:04 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:14:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:14:04 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:14:04 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:14:04 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:18:07 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:18:08 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:18:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:18:17 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:18:17 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:18:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:18:17 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 100
ERROR - 2017-12-09 02:18:17 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 101
ERROR - 2017-12-09 02:18:18 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:21:39 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:21:40 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:22:21 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:22:22 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:22:37 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:22:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:22:44 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:22:46 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:22:46 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:22:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:22:46 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 100
ERROR - 2017-12-09 02:22:46 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 101
ERROR - 2017-12-09 02:22:46 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:32:18 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:32:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:32:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:32:27 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:39:53 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:39:54 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:40:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:40:03 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:40:03 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:40:03 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
DEBUG - 2017-12-09 02:41:13 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:41:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:41:20 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:41:21 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:41:32 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:41:33 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:41:40 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:41:42 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:41:42 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:41:42 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
DEBUG - 2017-12-09 02:43:07 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:43:08 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:43:17 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:43:21 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:43:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:45:59 --> No URI present. Default controller set.
ERROR - 2017-12-09 02:45:59 --> Severity: error --> Exception: syntax error, unexpected '$numX' (T_VARIABLE) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:46:15 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:46:16 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:46:22 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:46:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:47:55 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:47:56 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:48:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:48:03 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:48:03 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:48:03 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:48:03 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:48:03 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
DEBUG - 2017-12-09 02:48:49 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:48:51 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:48:51 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:48:51 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
ERROR - 2017-12-09 02:48:51 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:48:51 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
DEBUG - 2017-12-09 02:49:32 --> No URI present. Default controller set.
ERROR - 2017-12-09 02:49:32 --> Severity: error --> Exception: syntax error, unexpected '$numX' (T_VARIABLE) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:49:37 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:49:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:49:46 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:49:49 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:52:52 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:52:53 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:52:58 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:53:00 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:53:00 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:53:00 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:53:07 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:53:08 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:53:08 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:53:08 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:56:50 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:56:52 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:56:56 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:56:59 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:56:59 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:56:59 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:57:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:57:08 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:57:08 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:57:08 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
ERROR - 2017-12-09 02:57:08 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 80
ERROR - 2017-12-09 02:57:08 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 82
DEBUG - 2017-12-09 02:57:41 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:57:43 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:57:47 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:57:55 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:57:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:57:55 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:57:55 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:57:55 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:58:18 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:58:18 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 87
ERROR - 2017-12-09 02:58:37 --> Severity: Notice --> Undefined variable: post_num C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 52
ERROR - 2017-12-09 02:58:37 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 73
ERROR - 2017-12-09 02:58:37 --> Severity: Warning --> Division by zero C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\location.php 74
ERROR - 2017-12-09 02:58:37 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians(NAN) ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians(NAN) ) + sin( radians(NAN) ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1
DEBUG - 2017-12-09 02:58:39 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:58:40 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:58:42 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:58:45 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:58:45 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 81
ERROR - 2017-12-09 02:58:45 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 83
DEBUG - 2017-12-09 02:58:50 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:58:58 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:58:59 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:59:20 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:59:22 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:59:22 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 81
ERROR - 2017-12-09 02:59:22 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 83
DEBUG - 2017-12-09 02:59:31 --> No URI present. Default controller set.
DEBUG - 2017-12-09 02:59:32 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:59:37 --> Google Maps Class Initialized
DEBUG - 2017-12-09 02:59:40 --> Google Maps Class Initialized
ERROR - 2017-12-09 02:59:40 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 81
ERROR - 2017-12-09 02:59:40 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 83
DEBUG - 2017-12-09 03:00:03 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:00:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:00:08 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:00:11 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:00:11 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 81
ERROR - 2017-12-09 03:00:11 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 83
DEBUG - 2017-12-09 03:00:26 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:00:27 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:00:32 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:00:36 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:07:46 --> No URI present. Default controller set.
ERROR - 2017-12-09 03:07:46 --> Severity: error --> Exception: syntax error, unexpected ';' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
DEBUG - 2017-12-09 03:08:02 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:08:03 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:08:09 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:08:11 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:08:11 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
DEBUG - 2017-12-09 03:09:02 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:09:03 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:09:07 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:09:09 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:09 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
DEBUG - 2017-12-09 03:09:35 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:09:36 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:09:40 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:09:42 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:42 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
DEBUG - 2017-12-09 03:09:46 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:09:46 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
DEBUG - 2017-12-09 03:11:46 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:11:47 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:11:52 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:11:54 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined offset: 0 C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 78
ERROR - 2017-12-09 03:11:54 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 79
DEBUG - 2017-12-09 03:14:41 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:14:42 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:14:47 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:14:49 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:15:29 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:15:33 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:17:25 --> No URI present. Default controller set.
ERROR - 2017-12-09 03:17:25 --> Severity: error --> Exception: syntax error, unexpected '$numX' (T_VARIABLE) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
DEBUG - 2017-12-09 03:17:29 --> No URI present. Default controller set.
ERROR - 2017-12-09 03:17:29 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 184
DEBUG - 2017-12-09 03:17:37 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:17:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:17:43 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:17:45 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 72
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 72
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 72
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Use of undefined constant lag - assumed 'lag' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:17:45 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
DEBUG - 2017-12-09 03:18:25 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:18:26 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:18:30 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:18:32 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Use of undefined constant lag - assumed 'lag' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
ERROR - 2017-12-09 03:18:32 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
DEBUG - 2017-12-09 03:22:47 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:11 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:13 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:23:14 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:18 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:23:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:24 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:26 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:23:26 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:23:26 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 75
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Use of undefined constant lag - assumed 'lag' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 76
ERROR - 2017-12-09 03:23:27 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 77
DEBUG - 2017-12-09 03:23:33 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:34 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:23:35 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:23:37 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:23:38 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:24:26 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:24:27 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:24:33 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:24:35 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:24:54 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:24:55 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:03 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:17 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:25:18 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:23 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:25:58 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:26:00 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:26:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:26:07 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 72
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Use of undefined constant lag - assumed 'lag' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:26:07 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
DEBUG - 2017-12-09 03:26:30 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:26:31 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:26:35 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:26:39 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:27:18 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:27:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:27:23 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:27:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:30:52 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:30:53 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:30:57 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:30:59 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:31:40 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:31:41 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:31:46 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:31:48 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:31:55 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:31:56 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:32:00 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:32:03 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:33:38 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:33:39 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:33:43 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:33:46 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Undefined variable: numX C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 72
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 73
ERROR - 2017-12-09 03:33:46 --> Severity: Notice --> Undefined variable: numY C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 74
DEBUG - 2017-12-09 03:34:46 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:34:47 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:34:51 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:34:52 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:35:53 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:35:54 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:35:58 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:36:01 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:36:01 --> Severity: Notice --> Use of undefined constant lng - assumed 'lng' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
ERROR - 2017-12-09 03:36:01 --> Severity: Notice --> Array to string conversion C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
DEBUG - 2017-12-09 03:37:19 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:37:20 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:37:25 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:37:27 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:38:13 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:38:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:38:18 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:38:22 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:38:22 --> Severity: Notice --> Use of undefined constant lat - assumed 'lat' C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 71
DEBUG - 2017-12-09 03:38:29 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:38:31 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:38:36 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:38:39 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:40:00 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:40:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:40:06 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:40:09 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:18 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:41:20 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:24 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:28 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:46 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:41:47 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:51 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:41:54 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:44:29 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:44:30 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:44:34 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:44:37 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:44:37 --> Severity: Notice --> Undefined property: Services::$Services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:44:37 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:45:18 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:45:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:45:23 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:45:26 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:46:00 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:46:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:46:03 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:46:04 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:46:10 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:46:13 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:46:13 --> Severity: Notice --> Undefined property: Services::$Services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:46:13 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:46:55 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:46:57 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:47:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:47:05 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:47:05 --> Severity: Notice --> Undefined property: Services::$services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:47:05 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:49:11 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:49:12 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:49:18 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:49:22 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:49:23 --> Severity: Notice --> Undefined property: Services::$Services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:49:23 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:50:36 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:50:37 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:50:43 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:50:45 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:50:46 --> Severity: Notice --> Undefined property: Services::$Services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:50:46 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:51:15 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:51:16 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:51:22 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:51:24 --> Google Maps Class Initialized
ERROR - 2017-12-09 03:51:24 --> Severity: Notice --> Undefined property: Services::$Services_model C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
ERROR - 2017-12-09 03:51:24 --> Severity: error --> Exception: Call to a member function subwayLocation() on null C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 103
DEBUG - 2017-12-09 03:52:12 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:52:13 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:52:19 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:52:26 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:52:29 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:56:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:56:05 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:59:15 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:59:16 --> No URI present. Default controller set.
DEBUG - 2017-12-09 03:59:18 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:59:23 --> Google Maps Class Initialized
DEBUG - 2017-12-09 03:59:25 --> Google Maps Class Initialized
ERROR - 2017-12-09 04:00:31 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 107
ERROR - 2017-12-09 04:00:41 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 107
ERROR - 2017-12-09 04:00:51 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 107
DEBUG - 2017-12-09 04:00:54 --> No URI present. Default controller set.
ERROR - 2017-12-09 04:00:54 --> Severity: error --> Exception: syntax error, unexpected 'foreach' (T_FOREACH) C:\Bitnami\wampstack-7.1.10-1\apache2\htdocs\kakoho-webserver\application\controllers\Services.php 107
DEBUG - 2017-12-09 04:01:00 --> No URI present. Default controller set.
DEBUG - 2017-12-09 04:01:01 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:08 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:12 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:21 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:23 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:45 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:50 --> Google Maps Class Initialized
DEBUG - 2017-12-09 04:01:52 --> Google Maps Class Initialized
