<?php
function messageToApple($name, $message, $sound = true, $subject = "") {
  if($message == "") {
    return 0;
  }
  require_once(ROOT.'modules/idevices/FindMyiPhone.php');
  try {
    $devices = SQLSelect("SELECT appleIDs.APPLEID, appleIDs.PASSWORD, idevices.DEVICE_ID FROM appleIDs, idevices WHERE appleIDs.APPLEID = idevices.APPLEID AND idevices.NAME =  '".$$
    foreach($devices as $device) {
      $FindMyiPhone = new FindMyiPhone($device['APPLEID'], $device['PASSWORD'], false);
      $FindMyiPhone->sendMessage($device['DEVICE_ID'], $message, (bool)$sound, $subject);
    }
  } catch (exception $e) {
    registerError('idevices', 'ERROR: ' . $e->getMessage());
  }
}

function soundToApple($name, $subject = "") {
  require_once(ROOT.'modules/idevices/FindMyiPhone.php');
  try {
    $devices = SQLSelect("SELECT appleIDs.APPLEID, appleIDs.PASSWORD, idevices.DEVICE_ID FROM appleIDs, idevices WHERE appleIDs.APPLEID = idevices.APPLEID AND idevices.NAME =  '".$$
    foreach($devices as $device) {
      $FindMyiPhone = new FindMyiPhone($device['APPLEID'], $device['PASSWORD'], false);
      $FindMyiPhone->playSound($device['DEVICE_ID'], $subject);
    }
  } catch (exception $e) {
    registerError('idevices', 'ERROR: ' . $e->getMessage());
  }
}

function lockToApple($device, $message, $phoneNumber = "") {
}

function findApple($device, $timeout = 60) {
  require_once(ROOT.'modules/idevices/FindMyiPhone.php');
  try {
    $devices = SQLSelect("SELECT appleIDs.APPLEID, appleIDs.PASSWORD, idevices.DEVICE_ID FROM appleIDs, idevices WHERE appleIDs.APPLEID = idevices.APPLEID AND idevices.NAME =  '".$$
    foreach($devices as $device) {
      $FindMyiPhone = new FindMyiPhone($device['APPLEID'], $device['PASSWORD'], false);
      $FindMyiPhone->playSound($device['DEVICE_ID'], $subject);
    }
  } catch (exception $e) {
    registerError('idevices', 'ERROR: ' . $e->getMessage());    
  }
}
?>
