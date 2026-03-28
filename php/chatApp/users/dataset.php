<?php
if(!defined('APP_KEY') || APP_KEY !== 'RnJhbmNlUzEyMw==') die('Handshake failed');
$all_users = array (
  'admin' => 
  array (
    'password' => 'admin123',
    'name' => 'System Admin',
  ),
  'user1' => 
  array (
    'password' => 'pass123',
    'name' => 'John Doe',
  ),
  'JnDoe' => 
  array (
    'password' => 'Hu',
    'name' => 'JnDoe',
  ),
);
$all_chats = array (
  0 => 
  array (
    'from' => 'admin',
    'to' => 'user1',
    'msg' => 'Hi! Welcome to the AI chat.',
    'time' => '12:00',
  ),
  1 => 
  array (
    'from' => 'user1',
    'to' => 'admin',
    'msg' => 'Thanks! Is this secure?',
    'time' => '12:01',
  ),
  2 => 
  array (
    'from' => 'guest',
    'to' => 'admin',
    'msg' => 'I shouldn\'t see this.',
    'time' => '12:05',
  ),
);
?>