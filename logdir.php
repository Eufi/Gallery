<?php

function logDir($dir, array $rejectEnts = ['.', '..']) {
  $ents = [];

  if (!is_dir($dir)) {
    return null;
  }

  if (!($dh = opendir($dir))) {
    return null;
  }

  while (($ent = readdir($dh)) !== false) {
    if (in_array($ent, $rejectEnts)) {
      continue;
    }

    $ents[] = $dir . '/' . $ent;
  }

  closedir($dh);

  return $ents;
}
