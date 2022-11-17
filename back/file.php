<?php

// Vérification pas d'erreur dans le téléchargement du fichier
function isUploadSuccessful(array $uploadedFile): bool
{
  return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
}

// Vérification de la taille maximale du fichier téléchargée
function isUploadSmallThan5m(array $uploadedFile): bool
{
  return $uploadedFile['size'] < 5000000;
}

// Vérification du type MIME
function isMimeTypeAutorized(array $uploadedFile): bool
{
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $finfo->file($uploadedFile['tmp_name']);
  // var_dump($mimeType);
  return in_array($mimeType, ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], true);
}

// Renommage extension fichier
function getExtensionFromMimeType(string $mimeType): ?string
{
  switch ($mimeType) {
    case 'image/jpeg';
    case 'image/jpg':
      return 'jpg';

    case 'image/png':
      return 'png';

    case 'image/gif':
      return 'gif';

    default:
      return null;
  }
}

// Renommage unique + déplacement du fichier dans mon dossier medias/uploaded
function moveUploadedFile(array $uploadedFile): string
{
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $finfo->file($uploadedFile['tmp_name']);

  $imagePath = sprintf(
    '../médias/faces/%s.%s',
    sha1_file($uploadedFile['tmp_name']),
    getExtensionFromMimeType($mimeType)
  );

  move_uploaded_file(
    $_FILES['uploaded_file']['tmp_name'],
    $imagePath
  );

  return $imagePath;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    if (!IsUploadSuccessful($_FILES['uploaded_file'])) {
      $reponse = 'Problème de téléversement de fichiers';
      require $level . 'pages/error.php';
      // throw new Exception('Erreur durant le téléchargement...');
    }

    if (!isUploadSmallThan5m($_FILES['uploaded_file'])) {
      $reponse = 'Fichier trop lourd ! Il doit être inférieur à 5 Mo.';
      require $level . 'pages/error.php';
      // throw new Exception('Le fichier est trop lourd ! Il doit être inférieur à 5 Mo.');
    }

    if (!isMimeTypeAutorized($_FILES['uploaded_file'])) {
      $reponse = 'Le format du fichier n\'est pas valide. JPG, JPEG, PNG et GIF seulement.';
      require $level . 'pages/error.php';
      // throw new Exception('Le format du fichier n\'est pas valide');
    }

    if (IsUploadSuccessful($_FILES['uploaded_file']) and (isUploadSmallThan5m($_FILES['uploaded_file'])) and (isMimeTypeAutorized($_FILES['uploaded_file']))) {
      $imagePath = moveUploadedFile($_FILES['uploaded_file']);
    }
  } catch (Exception $e) {
    die($e->getMessage());
  }
}
