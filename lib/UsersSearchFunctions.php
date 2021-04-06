<?php



function searchId($searchId)
{
    return function ($userListObj) use ($searchId) {
        if ($searchId !== "") {
            return stripos($userListObj->getUserId(), $searchId) !== false;
        }
    };
}

function searchFirstName($searchFirstName)
{
    return function ($userListObj) use ($searchFirstName) {
        if ($searchFirstName !== "") {
            return stripos($userListObj->getFirstName(), $searchFirstName) !== false;
        }
    };
}

function searchLastName($searchLastName)
{
    return function ($userListObj) use ($searchLastName) {
        if ($searchLastName !== "") {
            return stripos($userListObj->getLastName(), $searchLastName) !== false;
        }
    };
}



function searchMail($searchMail)
{
    return function ($userListObj) use ($searchMail) {
        if ($searchMail !== 'all') {
            return stripos($userListObj->getEmail(), $searchMail) !== false;
        } else {
            return true;
        }
    };
}

function searchAge($searchAge)
{
    return function ($userListObj) use ($searchAge) {
        if ($searchAge !== "") {
            return (stripos($userListObj->getAge(), $searchAge) !== false);
        } else {
            return true;
        }
    };
}