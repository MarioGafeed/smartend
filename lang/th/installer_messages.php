<?php

return array (
  'title' => 'โปรแกรมติดตั้ง MTH CMS',
  'next' => 'Nั้นตอนต่อไป',
  'back' => 'ก่อนหน้านี้',
  'finish' => 'ติดตั้ง',
  'forms' =>
  array (
    'errorTitle' => 'เกิดข้อผิดพลาดต่อไปนี้:',
  ),
  'welcome' =>
  array (
    'templateTitle' => 'ยินดีต้อนรับ',
    'title' => 'โปรแกรมติดตั้ง MTH CMS',
    'message' => 'วิซาร์ดการติดตั้งและการตั้งค่าที่ง่าย',
    'next' => 'ตรวจสอบข้อกำหนด',
  ),
  'requirements' =>
  array (
    'templateTitle' => 'ขั้นตอนที่ 1 | ข้อกำหนดของเซิร์ฟเวอร์',
    'title' => 'ข้อกำหนดของเซิร์ฟเวอร์',
    'next' => 'ตรวจสอบสิทธิ์',
  ),
  'permissions' =>
  array (
    'templateTitle' => 'ขั้นตอนที่ 2 | สิทธิ์',
    'title' => 'สิทธิ์',
    'next' => 'กำหนดค่าสภาพแวดล้อม',
  ),
  'environment' =>
  array (
    'menu' =>
    array (
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม',
      'title' => 'การตั้งค่าสภาพแวดล้อม',
      'desc' => 'โปรดเลือกวิธีที่คุณต้องการกำหนดค่าไฟล์ <code>.env</code> ของแอป',
      'wizard-button' => 'การตั้งค่าตัวช่วยสร้างแบบฟอร์ม',
      'classic-button' => 'แก้ไขข้อความคลาสสิก',
    ),
    'wizard' =>
    array (
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม | ตัวช่วยสร้างที่แนะนำ',
      'title' => 'แนะนำ <code>.env</code> แบบตัวช่วยสร้าง',
      'tabs' =>
      array (
        'environment' => 'สภาพสิ่งแวดล้อม',
        'database' => 'ฐานข้อมูล',
        'application' => 'แอปพลิเคชัน',
      ),
      'form' =>
      array (
        'name_required' => 'ต้องระบุชื่อสภาพแวดล้อม',
        'app_name_label' => 'ชื่อแอปพลิเคชัน',
        'app_name_placeholder' => 'ชื่อแอปพลิเคชัน',
        'app_environment_label' => 'สภาพแวดล้อมแอปพลิเคชัน',
        'app_environment_label_local' => 'เครื่องลูกข่าย',
        'app_environment_label_developement' => 'การพัฒนา',
        'app_environment_label_qa' => 'การตรวจสอบ',
        'app_environment_label_production' => 'การใช้งานจริง',
        'app_environment_label_other' => 'อื่นๆ',
        'app_environment_placeholder_other' => 'ป้อนสภาพแวดล้อมของคุณ ...',
        'app_debug_label' => 'การแก้ไขข้อบกพร่องของแอปพลิเคชัน',
        'app_debug_label_true' => 'จริง',
        'app_debug_label_false' => 'เท็จ',
        'app_log_level_label' => 'ระดับบันทึกแอปพลิเคชัน',
        'app_log_level_label_debug' => 'แก้จุดบกพร่อง',
        'app_log_level_label_info' => 'ข้อมูล',
        'app_log_level_label_notice' => 'แจ้งให้ทราบล่วงหน้า',
        'app_log_level_label_warning' => 'คำเตือน',
        'app_log_level_label_error' => 'ข้อผิดพลาด',
        'app_log_level_label_critical' => 'วิกฤต',
        'app_log_level_label_alert' => 'แจ้งเตือน',
        'app_log_level_label_emergency' => 'ฉุกเฉิน',
        'app_url_label' => 'URL ของแอปพลิเคชัน',
        'app_url_placeholder' => 'URL ของแอปพลิเคชัน',
        'db_connection_label' => 'การเชื่อมต่อฐานข้อมูล',
        'db_connection_label_mysql' => 'ฐานข้อมูล mysql',
        'db_connection_label_sqlite' => 'ฐานข้อมูล sqlite',
        'db_connection_label_pgsql' => 'ฐานข้อมูล pgsql',
        'db_connection_label_sqlsrv' => 'ฐานข้อมูล sqlsrv',
        'db_host_label' => 'โฮสต์ฐานข้อมูล',
        'db_host_placeholder' => 'โฮสต์ฐานข้อมูล',
        'db_port_label' => 'พอร์ตฐานข้อมูล',
        'db_port_placeholder' => 'พอร์ตฐานข้อมูล',
        'db_name_label' => 'ชื่อฐานข้อมูล',
        'db_name_placeholder' => 'ชื่อฐานข้อมูล',
        'db_username_label' => 'ชื่อผู้ใช้ฐานข้อมูล',
        'db_username_placeholder' => 'ชื่อผู้ใช้ฐานข้อมูล',
        'db_password_label' => 'รหัสผ่านฐานข้อมูล',
        'db_password_placeholder' => 'รหัสผ่านฐานข้อมูล',
        'app_tabs' =>
        array (
          'more_info' => 'ข้อมูลเพิ่มเติม',
          'broadcasting_title' => 'การแพร่ภาพ, แคช, เซสชัน & คิวรี่',
          'broadcasting_label' => 'ไดร์เวอร์การแพร่ภาพ',
          'broadcasting_placeholder' => 'ไดร์เวอร์การแพร่ภาพ',
          'cache_label' => 'ไดร์เวอร์แคช',
          'cache_placeholder' => 'ไดร์เวอร์แคช',
          'session_label' => 'ไดร์เวอร์เซสชัน',
          'session_placeholder' => 'ไดร์เวอร์เซสชัน',
          'queue_label' => 'ไดร์เวอร์คิวรี่',
          'queue_placeholder' => 'ไดร์เวอร์คิวรี่',
          'redis_label' => 'ไดร์เวอร์ Redis',
          'redis_host' => 'โฮสต์ Redis',
          'redis_password' => 'รหัสผ่าน Redis',
          'redis_port' => 'พอร์ต Redis',
          'mail_label' => 'อีเมล์',
          'mail_driver_label' => 'ไดร์เวอร์อีเมล์',
          'mail_driver_placeholder' => 'ไดร์เวอร์อีเมล์',
          'mail_host_label' => 'โฮสต์อีเมล์',
          'mail_host_placeholder' => 'โฮสต์อีเมล์',
          'mail_port_label' => 'พอร์ตอีเมล์',
          'mail_port_placeholder' => 'พอร์ตอีเมล์',
          'mail_username_label' => 'ชื่อผู้ใช้อีเมล์',
          'mail_username_placeholder' => 'ชื่อผู้ใช้อีเมล์',
          'mail_password_label' => 'รหัสผ่านอีเมล์',
          'mail_password_placeholder' => 'รหัสผ่านอีเมล์',
          'mail_encryption_label' => 'การเข้ารหัสอีเมล์',
          'mail_encryption_placeholder' => 'การเข้ารหัสอีเมล์',
          'pusher_label' => 'ตัวผลักดัน',
          'pusher_app_id_label' => 'ตัวผลักดัน App Id',
          'pusher_app_id_palceholder' => 'ตัวผลักดัน App Id',
          'pusher_app_key_label' => 'ตัวผลักดัน App Key',
          'pusher_app_key_palceholder' => 'ตัวผลักดัน App Key',
          'pusher_app_secret_label' => 'ตัวผลักดัน App Secret',
          'pusher_app_secret_palceholder' => 'ตัวผลักดัน App Secret',
        ),
        'buttons' =>
        array (
          'setup_database' => 'ตั้งค่าฐานข้อมูล',
          'setup_application' => 'ติดตั้งแอปพลิเคชัน',
          'install' => 'การติดตั้ง',
        ),
        'db_connection_failed' => 'ไม่สามารถเชื่อมต่อกับฐานข้อมูลโปรดตรวจสอบรายละเอียดการเชื่อมต่อของคุณ',
      ),
    ),
    'classic' =>
    array (
      'templateTitle' => 'ขั้นตอนที่ 3 | การตั้งค่าสภาพแวดล้อม | ตัวแก้ไขแบบคลาสสิก',
      'title' => 'ตัวแก้ไขสภาพแวดล้อมแบบคลาสสิก',
      'save' => 'บันทึก .env',
      'back' => 'ใช้ตัวช่วยสร้างแบบฟอร์ม',
      'install' => 'บันทึกและติดตั้ง',
    ),
    'success' => 'บันทึกการตั้งค่าไฟล์. env ของคุณแล้ว',
    'errors' => 'ไม่สามารถบันทึกไฟล์. env โปรดสร้างด้วยตนเอง',
  ),
  'install' => 'ติดตั้ง',
  'installed' =>
  array (
    'success_log_message' => 'การติดตั้ง Laravel ติดตั้งเรียบร้อยแล้วบน ',
  ),
  'final' =>
  array (
    'title' => 'การติดตั้งเสร็จสิ้น',
    'templateTitle' => 'การติดตั้งเสร็จสิ้น',
    'finished' => 'ติดตั้ง MTH CMS เรียบร้อยแล้ว',
    'migration' => 'การย้ายข้อมูล & ส่งออกเอาต์พุตคอนโซล:',
    'console' => 'เอาต์พุตคอนโซลแอปพลิเคชัน:',
    'log' => 'รายการบันทึกการติดตั้ง:',
    'env' => 'ไฟล์. env ขั้นสุดท้าย:',
    'exit' => 'ไปที่ MTH แดชบอร์ด',
  ),
  'updater' =>
  array (
    'title' => 'อัพเดต Laravel',
    'welcome' =>
    array (
      'title' => 'ยินดีต้อนรับสู่การอัพเดต',
      'message' => 'ยินดีต้อนรับสู่วิซาร์ดการอัปเดต',
    ),
    'overview' =>
    array (
      'title' => 'ภาพรวม',
      'message' => 'มีการอัปเดต 1 รายการ | มีการอัปเดตจำนวน :number',
      'install_updates' => 'ติดตั้งการอัพเดต',
    ),
    'final' =>
    array (
      'title' => 'เสร็จแล้ว',
      'finished' => 'อัปเดตฐานข้อมูลของแอปพลิเคชันเรียบร้อยแล้ว',
      'exit' => 'คลิกที่นี่เพื่อไปที่แดชบอร์ดผู้ดูแลระบบ',
    ),
    'log' =>
    array (
      'success_message' => 'โปรแกรมติดตั้ง Laravel อัปเดตเรียบร้อยแล้วบน ',
    ),
  ),
);
