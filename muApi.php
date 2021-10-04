<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);



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

    if (!empty($data["artistSearch"])) {
        $sql .= " AND muArtist LIKE CONCAT('%', :muArtist, '%')  ";
        $bind[":muArtist"] = $data["artistSearch"];

    }

    if (!empty($data["trackSearch"])) {
        $sql .= " OR muTrack LIKE CONCAT('%', :muTrack, '%')  ";
        $bind[":muTrack"] = $data["trackSearch"];

    }

    if (isset($data["albumSearch"])) {
        $sql .= " AND muAlbum = :muAlbum";
        $bind[":muAlbum"] = $data["albumSearch"];

    }

    if (isset($data["genreSearch"])) {
        $sql .= " AND muGenre = :muGenre";
        $bind[":muGenre"] = $data["genreSearch"];

    }

    if (isset($data["stylesSearch"])) {
        $sql .= " AND muStyles = :muStyles";
        $bind[":muStyles"] = $data["stylesSearch"];

    }


    if (isset($data["membersSearch"])) {
        $sql .= " AND muMembers = :muMembers";
        $bind[":muMembers"] = $data["membersSearch"];

    }


    if (!empty($data["releaseSearch"])) {
        $sql .= " AND muRelease LIKE CONCAT('%', :muRelease, '%')  ";
        $bind[":muRelease"] = $data["releaseSearch"];

    }

    if (isset($data["durationSearch"])) {
        $sql .= " AND muDuration >= :muDuration";
        $bind[":muDuration"] = $data["durationSearch"];

    }

    if (isset($data["priceSearch"])) {
        $sql .= " AND muPrice >= :muPrice";
        $bind[":muPrice"] = $data["priceSearch"];

    }

    if (isset($data["imageSearch"])) {
        $sql .= " AND muPicture >= :muPicture";
        $bind[":muPicture"] = $data["imageSearch"];

    }


$sql .= " ORDER BY muPrice DESC";


$info_om_musikerne = $db->sql($sql, $bind);
header("HTTP/1.1 200 OK");

echo json_encode($info_om_musikerne);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Your Password is Incorrect";

    echo json_encode($error);
}





