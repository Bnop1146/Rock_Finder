<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

$data["password"] = "Bnop1146";



/*
 * password: Skal udfyldes og være KickPHP
 * nameSearch: Valgfri
 */


/*
 * header("HTTP/1.1 400 Bad Request"); Sending malformed data results in a 400 Bad Request response
 * header("HTTP/1.1 401 Unauthorized"); Trying to access to the API without authentication results in a 401 Unauthorized response
 * header("HTTP/1.1 404 Not Found"); Not Found
 * header("HTTP/1.1 405 Method Not Allowed"); Trying to use a method on a route for which it is not implemented results in a 405 Method Not Allowed
 * header("HTTP/1.1 422 Unprocessable Entity"); Sending invalid data results in a 422 unprocessable Entity response

 * header("HTTP/1.1 200 OK "); Getting a resource or a collection resources results in a 200 OK response.
 * header("HTTP/1.1 201 Created"); Creating a resource results in a 201 Created response
 * header("HTTP/1.1 204 No Content"); Updating or deleting a resource results in a 204 No Content response
*/


header('Content-Type: application/json; charset=utf-8');

if (isset($data["password"]) && $data["password"] == "Bnop1146") {
    $sql = "SELECT * FROM info_om_musikerne WHERE 1=1";
    $bind = [];

    if (!empty($data["nameSearch"])){
        $sql .= " AND muArtist = :muArtist";
        $bind[":muArtist"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muTrack = :muTrack";
        $bind[":muTrack"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muAlbum = :muAlbum";
        $bind[":muAlbum"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muGenre = :muGenre";
        $bind[":muGenre"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muStyles = :muStyles";
        $bind[":muStyles"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muStyles = :muStyles";
        $bind[":muStyles"] = $data["nameSearch"];

    }

    if (!empty($data["nameSearch"])){
        $sql .= " AND muMembers = :muMembers";
        $bind[":muMembers"] = $data["nameSearch"];

    }

    if (isset($data["numberData"])) {
        $sql = "SELECT muRelease, muDuration, muPrice FROM info_om_musikerne ORDER BY muRelease, muDuration, muPrice  ASC";
        $bind = [];

        if (isset($data["numberData"])) {
            $sql .= " AND muRelease >= :muRelease";
            $bind[":muRelease"] = $data["numberData"];

        }

        if (isset($data["numberData"])) {
            $sql .= " AND muDuration >= :muDuration";
            $bind[":muDuration"] = $data["numberData"];

        }

        if (isset($data["numberData"])) {
            $sql .= " AND muPrice >= :muPrice";
            $bind[":muPrice"] = $data["numberData"];

        }

    }


    $info_om_musikerne = $db ->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($info_om_musikerne);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Din kode er forkert";

    echo json_encode($error);}





